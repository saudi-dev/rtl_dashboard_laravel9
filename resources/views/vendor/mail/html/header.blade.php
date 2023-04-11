@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ URL::asset('assets/img/brand/logo.png') }}" class="logo-1" alt="Laravel Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
