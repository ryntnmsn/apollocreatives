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
    <td style="padding-top:16px">
        <b>Mission/s:</b><br>

        @foreach ($sub_services as $key => $sub_service)
            {{ $sub_service }}<br>
        @endforeach
    </td>
</tr>
<tr>
    <td style="padding-top:16px">
        <b>Preferred date and time for a call:</b><br>
        {{ $date }} | {{ $time }}
    </td>
</tr>
<tr>
    <td style="padding-top:16px">
        <b>Contact info:</b><br>
        {{ $email }} | {{ $contact }}
    </td>
</tr>
<tr class="mb-5">
    <td style="padding-top:16px">
         <b>Message:</b><br>{{ $body }}
    </td>
</tr>
</table>