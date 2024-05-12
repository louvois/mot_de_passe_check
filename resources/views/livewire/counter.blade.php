<div>


    <label>Mot de passe</label>

    <!--input type="password" wire:model.live='motdepasse'-->

    <input type="password" wire:model.live='motdepasse'>

    @if ( $validebutton)
        <input type="submit" value="VALIDER">
    @endif


    <p>
    <br>
    Mot de passe:  {{  $motdepasse }}
    <br>
    <div wire:poll>
    <br>
    <table class="border-2">
        <tr>
            <td class="w-80 border-2">Nbre de car >= 8</td>
            <td class="w-80 border-2">1 car majuscule</td>
            <td class="w-80 border-2">1 car minuscule</td>
            <td class="w-80 border-2">1 car alphanumérique</td>
            <td class="w-80 border-2">1 car spécial</td>
        </tr>
            <td>{{ $nbcar }}</td>
            <td>{{ $majuscule }}</td>
            <td>{{ $minuscule }}</td>
            <td>{{ $alphanumerique }}</td>
            <td>{{ $special }}</td>
        </tr>
    </table>

    </table>


    {{ $this->NOMBRE() }}
    {{ $this->MAJUSCULE() }}
    {{ $this->MINUSCULE() }}
    {{ $this->ALPHANUMERIQUE() }}
    {{ $this->SPECIAL() }}



    </p>
    </div>

</div>
