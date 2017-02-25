@extends('layouts.app')

@section('content')

@include('tag._link')
<header>
            <div class="header">
            <h1 class="title">PERSONAL INFORMATION</h1>
             </div>
            </header>
            
           <div class ="container">
               <div class="col-md-12">
                <div class="row"><br>
                    <div class="col-md-3 form-group">
                        <label for="firstname">First name</label>                        
                        <input class="form-control" type="text" name="firstname" id="firstname">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="Middlename">Middlename</label>                        
                        <input class="form-control" type="text" name="Middlename" id="Middlename">
                        
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="Lastname">Lastname</label>                        
                        <input class="form-control" type="text" name="Lastname" id="Lastname">
                        
                    </div>
                        <div class="col-md-1 form-group">
                        <label for="Age">Age</label>                        
                        <input class="form-control" type="text" name="Age" id="Age">
                        
                    </div>
                        <div class="col-md-2 form-group">
                                <label for="Gender">Gender</label>
                                <select class="form-control" type="select" id="gender" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Trap">Other</option>
                                </select>
                    </div>
                        <div class="col-md-2 form-group">
                        <label for="Year">Year</label>                        
                        <input class="form-control" type="text" name="Year" id="Year">
                        
                    </div>
                     <div class="col-md-2 form-group">
                                <label for="Birthday">month</label>
                                <select class="form-control" type="select" id="birthday" name="birthday">
                                <option value="jan">january</option>
                                <option value="Feb">February</option>
                                <option value="Mar">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                                </select>
                    </div>
                     <div class="col-md-2 form-group">
                                <label for="Day">Day</label>
                                <select class="form-control" type="select" id="Day" name="Day">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>    
                                </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="Address">Current Address</label>                        
                        <input class="form-control" type="text" name="Address" id="Address">
                        </div>
                    <div class="col-md-3 form-group">
                        <label for="CITY">CITY</label>                        
                        <input class="form-control" type="text" name="CITY" id="CITY">
                        </div>   
                
                    <div class="col-md-3 form-group">
                        <label for="Email">Email Address</label>                        
                        <input class="form-control" type="text" name="Email" id="Email">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="CreatePassword">Create Password</label>                        
                        <input class="form-control" type="text" name="CreatePassword" id="CreatePassword">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="ConfirmPassword">Confirm Password</label>                        
                        <input class="form-control" type="text" name="ConfirmPassword" id="ConfirmPassword">
                    </div>
                     <div class="col-md-3 form-group">  <label for="ConfirmPassword">.</label>                    
                    <input class="form-control" type="button" name="submit" id="submit" value="submit">
               </div>
@endsection