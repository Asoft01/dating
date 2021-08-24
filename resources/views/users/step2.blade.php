@extends('layouts.frontLayout.front_design')
@section('content')
<div id="right_container">
    <div style="padding:20px 15px 30px 15px;">
      <h1>Add Dating Profile</h1>
      <div> <strong> <br />
        Add Dating Profile by filling out the form below:-</strong><br />
        <br /></div>
      <div> <br />
        <h6 class="inner">Add Dating Profile:</h6>
        <br />
        <form action="" method="post">{{ csrf_field() }}
            <table width="80%">
              <tr>
                <td align="left" valign="top" class="body"><strong>Date of Birth:</strong></td>
                <td align="left" valign="top"><input autocomplete="off" name="dob" id="dob" type="text" size="22" /></td>
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