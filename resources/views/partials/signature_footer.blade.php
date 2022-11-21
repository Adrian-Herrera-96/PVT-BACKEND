<table class="m-t-35">
    <tr>
        <td class="no-border text-center text-base w-50 align-bottom">
            <span class="font-bold">
                ----------------------------------------------------
            </span>
        </td>
        <td class="no-border text-center text-base w-50 align-bottom">
            <span class="font-bold">
                ----------------------------------------------------
            </span>
        </td>
    </tr>
    <tr>
        <td class="no-border text-center text-base w-50 align-top">
            @if ($value)
                <span class="font-bold">{!! strtoupper($affiliate->spouse->fullName) !!}</span>
                <br />
                <span class="font-bold">C.I. {!! $affiliate->spouse->identity_card ?? '' !!} {!! strtoupper($affiliate->spouse->city_identity_card->first_shortened ?? '') !!}</span>
            @else
                <span class="font-bold">{!! strtoupper($affiliate->fullName) !!}</span>
                <br />
                <span class="font-bold">C.I. {!! $affiliate->identity_card ?? '' !!} {!! strtoupper($affiliate->city_identity_card->first_shortened ?? '') !!}</span>
            @endif

        </td>
        <td class="no-border text-center text-base w-50">
            <span class="font-bold block">{!! strtoupper($user->fullName) !!}</span>
            <div class="text-xs text-center" style="width: 350px; margin:0 auto; font-weight:100">
                {!! $user->position !!}</div>
        </td>
    </tr>
</table>
