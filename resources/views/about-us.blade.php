@extends('layouts.base')
@section('title','ABOUT US')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>

.team h4{
    text-transform:uppercase;
    font-weight:700;
    font-size:48px;
    margin:30px;
}
.details h3{
    font-size:25px;
    font-weight:bold;
}
.details h3 span{
    font-size:18px;
    font-weight:normal;
}
.details i{
    font-size:28px;
    padding:5px;
}
</style>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <h4>Our Team</h4>
            </div>
                <div class="col s12 m3 l3">
                <img src="https://pbs.twimg.com/profile_images/827719967659274240/lZnlBVca_400x400.jpg" class="responsive-img circle"/>
                <div class="details center">
                    <h3>Oscar Myo Min<br/><span class="green-text">Web Developer</span></h3>
                    <a href="https://www.facebook.com/oscar.com.mm" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="http://www.oscarmyomin.com" target="_blank"><i class="fa fa-chrome"></i></a>
                </div>
            </div>
            
            <div class="col s12 m3 l3">
                <img src="https://scontent.frgn2-1.fna.fbcdn.net/v/t1.0-1/c0.0.320.320/p320x320/27655540_534232666960352_5799529962355235770_n.jpg?_nc_eui2=v1%3AAeHit3Vgt61G4y8w9R62efMwwHaE4vl8xQdqoo9NNaIzcZfVxaAx2uWykMlt3a4LFongG5HtXqO9HOJkmmPHw2c7bcVEuXGQKrQEqiEhdJc5cg&oh=b9d4b2157ed7e0bc9962e0aa0435e8ed&oe=5ADB1820" class="responsive-img circle"/>
                <div class="details center">
                    <h3>Moe Ma Ka<br/><span class="green-text">Android Developer</span></h3>
                    <a href="https://www.facebook.com/profile.php?id=100011208700963" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="http://www.mmanimeworld.com" target="_blank"><i class="fa fa-chrome"></i></a>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection