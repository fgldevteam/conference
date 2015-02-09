<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<script src="/js/respond.min.js"></script>
    <![endif]-->
    <title> 2015 SGM Conference Registration </title>

</head>

<body>



    <div class="container">
        <h1><a href="/"><img src="/homepage/img/logo.png" style="height: 100px; padding-right: 20px;"/></a> 2015 SGM Conference Registration</h1>

        @if( count($errors) > 0)
            <h3 style="color: #c00;">Oops!</h3>
        @endif
        @foreach ($errors->all() as $error)

        <div>{{ $error }}</div>

        @endforeach

        {{ Form::open(array('action' => 'RegistrationController@registerUser', 'class' => 'form-horizontal', 'role' => 'form')) }}
            <fieldset>
                <legend>Personal</legend>
            <div class="form-group row">
                <label for="gender" class="col-xs-2 control-label">Gender</label>
                <div class="col-xs-8">
                    <label class="radio-inline"><input type="radio" name="gender" value="male"> Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="female"> Female</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="legalname" class="col-md-2 control-label">Full Legal Name</label>


                    <div class="col-md-1">
                        <select name="prefix" id="" class="form-control">
                            <option value="">---</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Mrs.">Mrs.</option>

                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="legal_first" class="form-control" id="legal_first" placeholder="First">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="legal_middle" class="form-control" id="legal_middle" placeholder="Middle">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="legal_last" class="form-control" id="legal_last" placeholder="Last">
                    </div>

            </div>
            <div class="form-group row">
                <label for="prefname" class="col-md-2 control-label">Name Tag</label>

                    <div class="col-md-3">
                        <input type="text" name="prefname_first" class="form-control" id="prefname_first" placeholder="First Name">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="prefname_last" class="form-control" id="prefname_last" placeholder="Last Name">
                    </div>


            </div>



            <div class="form-group row">
                <label for="dob" class="col-md-2 control-label">Date of Birth</label>
                <div class="col-md-2">

                    <select name="dob_month" id="dob_month" class="form-control">
                        <option value="">--- MONTH ---</option>
                        <option value="Jan">January</option>
                        <option value="Feb">February</option>
                        <option value="Mar">March</option>
                        <option value="Apr">April</option>
                        <option value="May">May</option>
                        <option value="Jun">June</option>
                        <option value="Jul">July</option>
                        <option value="Aug">August</option>
                        <option value="Sep">September</option>
                        <option value="Oct">October</option>
                        <option value="Nov">November</option>
                        <option value="Dec">December</option>
                    </select>
                </div>


                <div class="col-md-2">

                    <select name="dob_day" id="dob_month" class="form-control">
                        <option value="">--- DAY ---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
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

                <div class="col-md-2">

                    <select name="dob_year" id="dpb_year" class="form-control">
                        <option value="">--- YEAR ---</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                        <option value="1904">1904</option>
                        <option value="1903">1903</option>
                        <option value="1902">1902</option>
                        <option value="1901">1901</option>
                        <option value="1900">1900</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="diet" class="col-xs-2 control-label">Food Allergies</label>
                <div class="col-xs-8">
                    <input type="text" name="diet" class="form-control" id="diet" placeholder="">
                </div>
            </div>


            </fieldset>
            <fieldset>
                <legend>Contact</legend>

            <div class="form-group">
                <label for="phone" class="col-xs-2 control-label">Cell Phone</label>
                <div class="col-xs-8">
                    <input type="text" name="phone" class="form-control" id="phone"''>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-xs-2 control-label">E-mail Address</label>
                <div class="col-xs-8">
                    <p>Please supply a personal email address where we can contact you. Your email address will also be used as your username to log into the conference website.</p>
                    <input type="text" name="email" class="form-control" id="email" placeholder="">
                </div>

            </div>

            <div class="form-group">
                <label for="banner" class="col-xs-2 control-label">Banner/Dept</label>
                <div class="col-xs-8">
                    <select name="banner" id="banner" class="form-control">
                        <option value="">---- Select ----</option>
                        <option value="Sportchek">Sport Chek</option>
                        <option value="Atmosphere">Atmosphere</option>
                        <option value="National">National Sports</option>
                        <option value="PHL">Pro Hockey Life</option>
                        <option value="HeadOffice">Head Office</option>
                        <option value="FieldOps">Field Operations</option>
                        <option value="Exec">Executive</option>
                        <option value="Guest">Guest</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="store" class="col-xs-2 control-label">Store Number:</label>
                <div class="col-xs-8">
                    <input type="text" name="store" class="form-control" id="store" placeholder="If Applicable">
                </div>
            </div>



            </fieldset>
            <fieldset>
                <legend>Travel</legend>

            <div class="form-group">
                <label for="airport" class="col-xs-2 control-label">Departure Airport</label>
                <div class="col-xs-8">
                    <input type="text" name="airport" class="form-control" id="airport" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="altairport" class="col-xs-2 control-label">Alternate Airport</label>
                <div class="col-xs-8">
                    <input type="text" name="altairport" class="form-control" id="altairport" placeholder="if there are multiple airports in your area">
                </div>
            </div>


            </fieldset>
            <fieldset>
                <legend>Conference</legend>
            <div class="form-group">
                <label for="phone" class="col-xs-2 control-label">Sizes</label>
                <div class="col-xs-3">
                    <label>Shirt</label>
                    <select name="shirtsize" id="shirtsize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-S">Men's Small</option>
                        <option value="M-M">Men's Medium</option>
                        <option value="M-L">Men's Large</option>
                        <option value="M-XL">Men's X-Large</option>
                        <option value="M-XXL">Men's XX-Large</option>
                        <option value="W-S">Women's Small</option>
                        <option value="W-M">Women's Medium</option>
                        <option value="W-L">Women's Large</option>
                        <option value="W-XL">Women's X-Large</option>
                    </select>

                </div>
                <div class="col-xs-3">
                    <label>Shoes</label>
                    <select name="shoesize" id="shoesize" class="form-control">
                        <option value="">Please Choose</option>
                        <option value="M-7">Men's 7</option>
                        <option value="M-7.5">Men's 7.5</option>
                        <option value="M-8">Men's 8</option>
                        <option value="M-8.5">Men's 8.5</option>
                        <option value="M-9">Men's 9</option>
                        <option value="M-9.5">Men's 9.5</option>
                        <option value="M-10">Men's 10</option>
                        <option value="M-10.5">Men's 10.5</option>
                        <option value="M-11">Men's 11</option>
                        <option value="M-11.5">Men's 11.5</option>
                        <option value="M-12">Men's 12</option>
                        <option value="M-12.5">Men's 12.5</option>
                        <option value="M-13">Men's 13</option>
                        <option value="M-13.5">Men's 13.5</option>
                        <option value="M-14">Men's 14</option>
                        <option value="M-14.5">Men's 14.5</option>
                        <option value="M-15">Men's 15</option>
                        <option value="W-6">Women's 6</option>
                        <option value="W-6.5">Women's 6.5</option>
                        <option value="W-7">Women's 7</option>
                        <option value="W-7.5">Women's 7.5</option>
                        <option value="W-8">Women's 8</option>
                        <option value="W-8.5">Women's 8.5</option>
                        <option value="W-9">Women's 9</option>
                        <option value="W-9.5">Women's 9.5</option>
                        <option value="W-10">Women's 10</option>
                        <option value="W-10.5">Women's 10.5</option>
                        <option value="W-11">Women's 11</option>
                        <option value="W-11.5">Women's 11.5</option>
                        <option value="W-12">Women's 12</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-xs-2 control-label">Password</label>
                <div class="row">
                    <div class="col-xs-8">
                        <p>Choose a password to sign into the conference website. Your username will be your email address. <br />Minimum length of <strong>8 characters</strong>.</p>
                    </div>
                </div>

                <label class="col-xs-2 control-label"></label>
                <div class="row">
                    <div class="col-xs-6">
                        {{ Form::password('password', array('class' => 'form-control')) }}
                    </div>

                </div>

            </div>

            <div class="form-group">
                <label class="col-xs-2 control-label">Attendance</label>
                <div class="row">
                    <div class="col-xs-8">
                        <p>If you are not able to attend the conference for any reason, please check this box</p>
                    </div>
                </div>

                <label class="col-xs-2 control-label"></label>
                <div class="row">
                    <div class="col-xs-8 checkbox">
                        <label> {{ Form::checkbox('cantcome', '1') }} Unfortunately, I can't make it this year.</label>
                    </div>

                </div>

            </div>
            <br /><br />
            <div class="form-group">
                <label for="" class="col-xs-2 control-label"></label>
                <div class="col-xs-8">
                    <h5>Please Note: Changes to flight times / dates are <strong>NOT</strong> permitted. <br />DMs will be selecting roommates
                    </h5>
                    <div id="sending"></div>
                    <button type="submit" id="submit" class="btn btn-success pull-right">Send Registration</button>
                </div>
            </div>
        </fieldset>
        {{ Form::close() }}

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/jquery.maskedinput-1.3.min.js"></script>
    <!-- <script type="text/javascript" src="spec/lib/jquery.js"></script> -->
    <script type="text/javascript" src="/js/index.js"></script>

    <script>
    $("#phone").mask("(999) 999-9999");


    $('[placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
        }
    }).blur().parents('form').submit(function() {
        $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
            }
        })
    });
    </script>

</body>
</html>
