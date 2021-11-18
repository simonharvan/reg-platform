@php
    if($dataTypeContent->{$row->field}){
        $old_parameters = json_decode($dataTypeContent->{$row->field});
    }
@endphp


<div class="create-form-parameters">
    {{--  PREFIX  --}}

    <section id="personal">
        <p>Personal section</p>
        <small>Fields in this section will appear in Personal tab.</small>
        <hr>

        @include('formfields.personal')
    </section>

    <section id="travel">
        <p>Travel section</p>
        <small>Fields in this section will appear in Travel tab</small>
        <hr>

        @include('formfields.travel')
    </section>

    <section id="accomodation">
        <p>Accommodation section</p>
        <small>Fields in this section will appear in <strong>accomodation</strong> tab</small>
        <hr>

        @include('formfields.accomodation')
    </section>

    <section id="additional">
        <p>Additonal section</p>
        <small>Fields in this section will appear in <strong>additional info</strong> tab</small>
        <hr>

        @include('formfields.additional')
    </section>

    <section id="extra">
        <p>Extra</p>
        <small>Add fields that you can put in any section</small>
        <hr>

        @include('formfields.additional-file')
        @include('formfields.additional-fields')
    </section>

    <section id="extra">
        <p>Notes</p>
        <small>Add notes that you can put in any section</small>
        <hr>

        @include('formfields.notes')
    </section>
</div>
