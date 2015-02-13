@extends('app/layout')

@section('title')
Activity Selection
@stop

@section('content')
@include('app/includes/signedinbar')
<div class="page-header">
    <div class="container">
        <h3>Activity Selection</h3>
    </div>

</div>

<div class="container">

    <?php
        $user = Auth::user()->first ." " . Auth::user()->last;
        if(ActivitySelection::checkActivitySelection($user) > 0){
        ?>
            <h2>You are already registered for an activity</h2>
        <?php
        } else {
        ?>

            {{ Form::open(array('action' => 'ConfSessionController@saveActivitySelection', 'role' => 'form')) }}
            <input type="hidden" name="user_name" value="{{ Auth::user()->first }} {{ Auth::user()->last }}">
            <input type="hidden" name="user_store" value="{{ Registration::getStoreNumber( Auth::user()->email ) }}">
            <table>
            @foreach($activity as $a)
            <tr>
            <?php
            $taken = ActivitySelection::getCount($a->id);
            $max = $a->seats;
            $remaining = $max - $taken;

            if( $remaining > 0 ) {
                ?>
                <td style="padding-right: 30px;"><p><input type="radio" name="activity" value="{{$a->id}}"><strong> {{$a->title}}</strong></p></td><td><p>Spots Remaining: {{$remaining}}</p></td>
                <?php
            } else {
                ?>
                <td style="padding-right: 30px;"><p><input type="radio" name="activity" value="" disabled> {{$a->title}}</p></td> <td><p>Spots Remaining: 0</p></td>
                <?php
            }
            ?>
            </tr>
            @endforeach
            </table>
            <button type="submit" class="btn btn-main btn-large"><i class="icon-plus"></i> Save Selection</button>

            {{ Form::close() }}

    <?php } ?>



</div>
@stop
