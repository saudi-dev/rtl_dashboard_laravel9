<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use URL;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function updateProfile(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'string', 'max:255'],
            // 'address' => ['required', 'string', 'max:255'],
            // 'nid' => ['required', 'integer', 'max:10'],
            // 'bio' => ['required', 'string', 'max:255'],
            // 'gender' => ['required', 'string', 'max:100'],

            'phone' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'nid' => ['string', 'max:255'],
            'bio' => ['string', 'max:255'],
            'gender' => ['string', 'max:100'],
        ]);

        # check if user profile image is null, then validate
        if (auth()->user()->profile_image == null) {
            $validate_image = Validator::make($request->all(), [
                // 'profile_image' => ['required', 'image', 'max:3000']
                'profile_image' => ['image', 'mimes:jpeg,jpg,gif,bmp,png', 'max:3000'],
            ]);
            # check if their is any error in image validation
            if ($validate_image->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_image->errors()->first()]);
            }
        }

        # check if their is any error
        if ($validated->fails()) {
            return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
        }

        # check if the request has profile image
        if ($request->hasFile('profile_image')) {
            // $imagePath = 'assets/img/users/'.auth()->user()->profile_image;
            $imagePath = URL::asset('assets/img/users/' . auth()->user()->profile_image);

            # check whether the image exists in the directory
            if (File::exists($imagePath)) {
                # delete image
                File::delete($imagePath);
            }
            $profile_image = $request->profile_image->store('profile_images', 'public');

        }

        # update the user info
        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'nid' => $request->nid,
            'gender' => $request->gender,
            'profile_image' => $profile_image ?? auth()->user()->profile_image,
        ]);
        return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    }

    public static function updateEnv($key, $value)
    {
        $path = base_path('.env');

        if (is_bool(env($key))) {
            $old = env($key) ? 'true' : 'false';
        }

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key=" . $old, "$key=" . $value, file_get_contents($path)
            ));
            return response()->json(['code' => 200, 'msg' => 'Settings updated successfully.']);
        }
    }

    public function conf()
    {
        $data = config('settings');
        return view('conf', compact('data'));
    }

}
