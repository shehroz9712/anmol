<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step"><a class="btn btn-primary" href="{!! route('front.create_event') !!}">1</a>
            <p>Event Detail</p>
        </div>
        <div class="stepwizard-step"><a class="btn btn-light" href="{!! route('front.venue_info.1') !!}">2</a>
            <p>Vanue Info</p>
        </div>
        <div class="stepwizard-step"><a class="btn btn-light" href="{!! route('front.menu') !!}">3</a>
            <p>Menu Detail</p>
        </div>
        <div class="stepwizard-step"><a class="btn btn-light" href="{!! route('front.service') !!}">4</a>
            <p>Services Style</p>
        </div>
        <div class="stepwizard-step"><a class="btn btn-light" href="{!! route('front.equipments') !!}">5</a>
            <p>Equipments </p>
        </div>
        <div class="stepwizard-step"><a class="btn btn-light" href="{!! route('front.labour_staff') !!}">6</a>
            <p>Labour & Staff </p>
        </div>
    </div>
</div>
@include('admin.partials.errors')
