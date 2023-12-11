<table>
<tr class="mb-5">
    <td>
        <b>Name:</b> {{ $fromName }}
    </td>
</tr>
<tr class="mb-5">
    <td>
        <b>Email:</b> {{ $fromEmail }}
    </td>
</tr>
<tr class="mb-5">
    <td>
        <b>Mission/s:</b><br>
        @foreach ($services as $key => $value)
            {{ $value }}<br>
        @endforeach
    </td>
</tr>
<tr class="mb-5">
    <td>
         <b>Message:</b><br>{{ $body }}
    </td>
</tr>
</table>