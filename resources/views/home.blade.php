@extends('layouts.app')

@section('content')
<input type="date" name="birtdate" placeholder="select Birth date" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <livewire:counter />

                    Date: <div id="datepicker"></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('localscript')
<script>
    console.log('localscript $("#datepicker").datepicker();');
</script>
@endsection
