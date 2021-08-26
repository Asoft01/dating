@extends('layouts.frontLayout.front_design')
@section('content')
<div id="right_container">
    <div style="padding:20px 15px 30px 15px;">
      <h1>Add Dating Profile</h1>
      <div> <strong> <br />
        Add Dating Profile by filling out the form below:-</strong><br />
        <br /></div>
      <div> <br />
        <h6 class="inner">Personal Information:</h6>
        <br />
        <form id="datingForm" name="datingForm" action="{{ url('/step/2') }}" method="post">{{ csrf_field() }}
            {{-- <input type="text" name="user_id" value="Auth::User()['id']"> --}}
            <table width="80%" cellpadding = "10" cellspacing= "10">
              <tr>
                <td align="left" valign="top" class="body"><strong>Date of Birth: * </strong></td>
                <td align="left" valign="top"><input autocomplete="off" name="dob" id="dob" type="text" size="22" style="font-size: 14px; width: 200px;"/></td>
              </tr>
             
              <tr>
                <td align="left" valign="top" class="body"><strong>Gender: * </strong></td>
                <td align="left" valign="top">
                    <select name="gender" style="font-size: 14px; height: 25px; width: 200px;">
                        <option>Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong>Height: * </strong></td>
                <td align="left" valign="top">
                    <select name="height" style="font-size: 14px; height: 25px; width: 200px;">
                       <option value="">Feet/Inches</option>
                       <option value="4' 0'">4' 0"</option>
                       <option value="4' 1'">4' 1"</option>
                       <option value="4' 2'">4' 2"</option>
                       <option value="4' 3'">4' 3"</option>
                       <option value="4' 4'">4' 4"</option>
                       <option value="4' 5'">4' 5"</option>
                       <option value="4' 6'">4' 6"</option>
                       <option value="4' 7'">4' 7"</option>
                       <option value="4' 7'">4' 8"</option>
                       <option value="4' 8'">4' 9"</option>
                       <option value="4' 10'">4' 10"</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong>Marital Status: * </strong></td>
                <td align="left" valign="top">
                    <select name="marital_status" style="font-size: 14px; height: 25px; width: 200px;">
                        <option value="">Select </option>
                        <option value="Unmarried">Unmarried</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        <option value="separated">Separated</option>
                        <option value="anulled">Anulled</option>
                        <option value="other">Other</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong>Body Type:</strong></td>
                <td align="left" valign="top">
                    <select name="body_type" style="font-size: 14px; height: 25px; width: 200px;">
                        <option value="">Select </option>
                        <option value="Slim">Slim</option>
                        <option value="Average">Average</option>
                        <option value="Athlete">Athletic</option>
                        <option value="Heavy">Heavy</option>
                    </select>
                </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong>Complexion:</strong></td>
                <td align="left" valign="top">
                    <select name="body_type" style="font-size: 14px; height: 25px; width: 200px;">
                       <option value="">Select</option>
                       <option value="Very Fair">Very Fair</option>
                       <option value="Fair">Fair</option>
                       <option value="Wheatish">Wheatish</option>
                       <option value="Dark">Dark</option>
                    </select>
                </td>
              </tr>
             
              <tr>
                <td align="left" valign="top" class="body"><strong>City:</strong></td>
                <td align="left" valign="top"><input autocomplete="off" name="city" id="city" type="text" size="22" style="font-size: 14px; height: 25px; width: 200px;"/></td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong> State:</strong></td>
                <td align="left" valign="top"><input autocomplete="off" name="state" id="state" type="text" size="22" style="font-size: 14px; height: 25px; width: 200px;" /></td>
              </tr>
              
              <tr>
                <td align="left" valign="top" class="body"><strong>Country:</strong></td>
                <td align="left" valign="top">
                    <select name="country" style="font-size: 14px; height: 25px; width: 200px;">
                      <option value="">Select</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong>Languages:</strong></td>
                <td align="left" valign="top">
                    <select name="languages[]" multiple style="font-size: 14px; height: 60px; width: 200px;">
                      <option value="">Select</option>
                        @foreach($languages as $language)
                            <option value="{{ $language->name }}">{{ $language->name }}</option>
                        @endforeach
                    </select>
                </td>
              </tr>

              
              <tr>
                <td align="left" valign="top" class="body"><strong>Hobbies:</strong></td>
                <td align="left" valign="top">
                    <select name="hobbies[]" multiple style="font-size: 14px; height: 60px; width: 200px;">
                      <option value="">Select</option>
                        @foreach($hobbies as $hobby)
                            <option value="{{ $hobby->title }}">{{ $hobby->title }}</option>
                        @endforeach
                    </select>
                </td>
              </tr>

              <tr>
                  <td colspan="2"><h6 class="inner"> Education & Career</h6></td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong> Highest Education:</strong></td>
                <td align="left" valign="top"><input autocomplete="off" name="education" id="education" type="text" style="font-size: 14px; height: 25px; width: 200px;" /></td>
              </tr>
              
              <tr>
                  <td align="left" valign="top" class="body"><strong> Occupation:</strong></td>
                  <td align="left" valign="top">
                      <select name="occupation" id="" style="font-size: 14px; height: 25px; width: 200px;">
                          <option value="">Select</option>
                          <option value="not_working">Not Working</option>
                          <option value="Teacher">Teacher</option>
                          <option value="Mechanic">Mechanic</option>
                          <option value="Model">Model</option>
                          <option value="Politician">Politician</option>
                          <option value="Real Estate">Real Estate</option>>
                      </select>
                  </td>
              </tr>

              <tr>
                <td align="left" valign="top" class="body"><strong> Income:</strong></td>
                <td align="left" valign="top">
                    <select name="income" style="font-size: 14px; height: 25px; width: 200px;">
                        <option value="">Select</option>
                        <option value="Under $25,000">Under $25,000</option>
                        <option value="$25,001-50,000">$25,001-50,000</option>
                        <option value="$50,001-75,000">$50,001-75,000</option>
                        <option value="$75,001-50,000">$75,001-100,000</option>
                        <option value="$100,001-150,000">$100,001-150,000</option>
                        <option value="$150,001-200,000">$150,001-200,000</option>
                        <option value="$200,001-200,000">$200,001-above</option>
                    </select>
                </td>
              </tr>

              <tr>
                    <td colspan="2"><h6 class="inner">About MySelf</h6></td>
                </tr>
              <tr>
                  <td align="left" valign="top" class="body"><strong>About Myself: * </strong></td>
                  <td align="left" valign="top">
                    <textarea name="about_myself" style="font-size: 14px; height: 70px; width: 200px;"></textarea>
                </td>
              </tr>

              <tr>
                  <td colspan="2"><h6 class="inner">About My Preferred Partner</h6></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="body"><strong>Partner Details: * </strong></td>
                <td align="left" valign="top">
                  <textarea name="about_partner" style="font-size: 14px; height: 75px; width: 200px;"></textarea>
              </td>
            </tr>
              <tr>
              
                <td></td>
                <td><input type="submit" name="submit" class="button" value="Submit" /></td>
              </tr>
            </table>
          </form>
      </div>
     
    </div>
    <div class="clear"></div>
  </div>
  @endsection