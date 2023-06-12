<div>
    <ul class="stepper">
        @if($currentStep ==1)
        <li class="stepper__item current"><img src="{{asset('images/1-grey.png')}}" class="tick" alt="tickimg" > Intro
        <li class="stepper__item"><img src="{{asset('images/2-grey.png')}}" class="tick" alt="tickimg" >Disclosure</li>
        <li class="stepper__item "><img src="{{asset('images/3-grey.png')}}" class="tick" alt="tickimg" >Requestor</li>
        <li class="stepper__item"><img src="{{asset('images/4-grey.png')}}" class="tick" alt="tickimg" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" >Review</li>
        @endif
        @if($currentStep == 2 )
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" > Intro
        <li class="stepper__item current"><img src="{{asset('images/2-blue.png')}}" class="tick" alt="tickimg" >Disclosure</li>
        <li class="stepper__item"><img src="{{asset('images/3-grey.png')}}" class="tick" alt="tickimg" >Requestor</li>
        <li class="stepper__item"><img src="{{asset('images/4-grey.png')}}" class="tick" alt="tickimg" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" >Review</li>
        @endif
        @if($currentStep == 3 )
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" > Intro
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Disclosure</li>
        <li class="stepper__item current"><img src="{{asset('images/3-blue.png')}}" class="tick" alt="tickimg" >Requestor</li>
        <li class="stepper__item"><img src="{{asset('images/4-grey.png')}}" class="tick" alt="tickimg" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" >Review</li>
        @endif
        @if($currentStep == 4 )
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" > Intro
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Disclosure</li>
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Requestor</li>
        <li class="stepper__item current" ><img src="{{asset('images/4-blue.png')}}" class="tick" alt="tickimg" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" >Review</li>
        @endif
        @if($currentStep == 5 )
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" > Intro
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Disclosure</li>
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Requestor</li>
        <li class="stepper__item" ><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" >Subject</li>
        <li class="stepper__item current"><img src="{{asset('images/5-blue.png')}}" class="tick" alt="tickimg" >Review</li>
        @endif
      </ul>
      <br>
      <div class="box">
        @if($currentStep == 1)
        <p class="paracss">Welcome</p>
        <p class="textcss">Name check will result in a search of the Illinois State Police's computerized criminal history record files to produce a subject record which matches identifiers used in the search (e.g., name, sex, race, and date of birth).</p><hr>
        @endif

        @if($currentStep == 2)
        <p><b>Disclosures</b></p>
        <p class="textcss">By checking these boxes you are electronically signing this document and indicating your agreement with the terms and conditions of the name check.</p><hr>
        @endif

        @if($currentStep == 3)
        <p><b>Request Information</b></p>
        <p class="textcss">Contact Information for the person requesting the name check. Results will be sent to the email address below.</p><hr>
        @endif
        @if($currentStep == 4)
        <p><b>Subject Information</b></p>
        <p class="textcss">Supply accurate information about the subject that will be looked up in the Illinois Police Department records.</p><hr>
        @endif
        <div class="row">
            <div class="column">
            <form wire:submit.prevent="register">
                @csrf
                {{-- Step 1 --}}
                @if($currentStep == 1 )
                    <div class="step-one container">
                        <div class="card-body ">
                            <div class="row ">
                                <h5>Process</h5>
                                <ul class="dotted-list container">
                                    <li>Fill in the target subjects information</li>
                                    <li>Make sure you have the following information: name, sex, race, and date of birth</li>
                                    <li>These identifiers will be used to search the Illinois State Police's computerized criminal history record files</li>
                                    <li>Name check results will be delivered to you via email</li>
                                    <li>Results are available through our portal in 24 to 48 hours (in most cases) <br></li>
                                </ul>
                                <h5>Use Cases</h5>
                                <ul class="dotted-list container">
                                <li>For Self-Personal Review</li>
                                <li>Housing or Rental Applicants</li>
                                <li>Private Household Contractors or Childcare Providers</li>
                                <li>Pre-Employment Purposes and Volunteers</li>
                                <li>Individuals Wanting to Determine If A Fingerprint Background Check Is Necessary <br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- Step 2 --}}
                @if($currentStep == 2 )
                <div class="step-two">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="disclosures" class="d-block">
                                        <input type="checkbox" id = "terms" wire:model ="terms"> 
                                        Identifier Based Search Only <span class="text-danger">*</span>
                                        <p class="sidecss">Name based check requests use the applicants name, sex, race, and date of birth to search the Illinois State Police's computerized criminal history record files.This type of background check will help the individual decide if fingerpri... Show more No Refunds
                                        </p>
                                        <p class="sidecss"><span class="text-danger"> @error('terms') {{$message}} @enderror</span></p>
                                        <br>
                                        <input type="checkbox" id = "refund" required/> 
                                        No Refunds <span class="text-danger">*</span>
                                        <p class="sidecss">I understand that no refunds will be provided.
                                        </p>
                                        <p class="sidecss"><span class="text-danger"> @error('refund') {{$message}} @enderror</span></p>
                                    </label>
                                </div>
                            </div>
                        </div>
                </div>
                @endif

                {{-- Step 3 --}}
                @if($currentStep == 3 )
                <div class="step-three">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">Requestor First Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" placeholder = "John" wire:model="first_name">
                                    <span class="text-danger"> @error('first_name') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Requestor Last Name</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" placeholder = "Doe" wire:model="last_name">
                                    <span class="text-danger"> @error('last_name') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Requestor Email</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" placeholder = "johndoe@gmail.com" wire:model="email">
                                    <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_confirmation">Email Confirmation</label><span class="text-danger"> *</span>
                                    <input type="text" class="form-control" placeholder = "johndoe@gmail.com" wire:model="email_confirmation">
                                    <span class="text-danger"> @error('email_confirmation') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Requestor Phone</label><span class="text-danger"> *</span>
                                    <div class="input-group">
                                        <select class="form-select form-select-sm selectCss" aria-label=".form-select-sm example" wire:model="phone_type">
                                            <option value="mobile">Mobile</option>
                                            <option value="telephone">Telephone</option>
                                        </select>
                                        <input type="text" class="form-control inputCss" placeholder="+1 (555) 987-6543" wire:model="phone_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="text-danger"> @error('phone_number') {{$message}} @enderror</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Step 4 --}}
                @if($currentStep == 4 )
                <div class="step-four">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_first_name">Subject First Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" id="first_name" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_middle_name">Subject Middle Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" id="middle_name" placeholder="Micheal">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_last_name">Subject Last Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" id="last_name" placeholder="Doe">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="birth_day">Date of Birth</label><span class="text-danger"> *</span>
                            <div class="form-group form-inline">
                                <select class="form-control" id="birth_month">
                                        <?php
                                        $months = [
                                            'January', 'February', 'March', 'April', 'May', 'June',
                                            'July', 'August', 'September', 'October', 'November', 'December'
                                        ];

                                        foreach ($months as $index => $month) {
                                            $value = $index + 1;
                                            echo "<option value=\"$value\">$month</option>";
                                        }
                                        ?>
                                </select> - 
                                <input type="text" class="form-control" id="birth_day" placeholder="DD"> - 
                                <input type="text" class="form-control" id="birth_year" placeholder="YYYY">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="sex">Sex</label><span class="text-danger"> *</span><br>
                                <input type="radio" id="male" name="sex" value="male"> 
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="sex" value="female">
                                <label for="female">Female</label>
                            </div>

                            <div class="form-group">
                                <label for="race">Race</label><span class="text-danger"> *</span><br>
                                <input type="radio" id="race1" name="race" value="race1">
                                <label for="race1">Asian</label><br>
                                <input type="radio" id="race2" name="race" value="race2">
                                <label for="race2">Black or African American</label><br>
                                <input type="radio" id="race3" name="race" value="race3">
                                <label for="race3">American Indian or Alaska Native</label><br>
                                <input type="radio" id="race4" name="race" value="race4">
                                <label for="race4">Caucasian or Hispanic</label><br>
                                <input type="radio" id="race5" name="race" value="race5">
                                <label for="race5">Indeterminable Race</label><br>
                            </div>

                        </div>

                    </div>
                </div>
                </div>
                @endif
                
                {{-- Step 5 --}}
                @if($currentStep == 5 )
                <div class="step-five">
                        <div class="card-body">
                            <div class="row tablecss">
                                <p><b>Subject Information</b></p>
                                <p>Summary of all the information collected to be submitted for name checking</p><hr>
                                <table class="table">
                                    <tr>
                                        <th>Full Name</th>
                                        <th>John Doe</th>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth</th>
                                        <th>1/11/2012</th>
                                    </tr>
                                    <tr>
                                        <th>Race</th>
                                        <th>Asian</th>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <th>Male</th>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <div class="row tablecss">
                                <p><b>Requestor Information</b></p>
                                <p>Summary of all the information collected to be submitted for name checking</p><hr>
                                <table class="table">
                                    <tr>
                                        <th>Full Name</th>
                                        <th>John Doe</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>johndoe@gmail.com</th>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <th>5552342342</th>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <th>Male</th>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>
                @endif
            </form>
            </div>
            <div class="column">
                @if($currentStep ==1)
                <p><img src="{{asset('images/insyc.svg')}}" alt="" class="imgside "></p>
                @endif
                @if($currentStep ==2)
                <p><img src="{{asset('images/disclosure.png')}}" alt="" class="imgside"></p>
                @endif
                @if($currentStep ==3)
                <p><img src="{{asset('images/requestor.png')}}" alt="" class="imgside"></p>
                @endif
                @if($currentStep ==4)
                <p><img src="{{asset('images/subject.png')}}" alt="" class="imgside4"></p>
                @endif
                @if($currentStep ==5)
                <p><img src="{{asset('images/review.png')}}" alt="" class="imgside5"></p>
                @endif
            </div>
            <br>
        </div>
    </div>
    <div id="action-buttons-container">
        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if($currentStep == 1 )
            <div></div>
            @endif

            @if($currentStep == 2 || $currentStep == 3 ||$currentStep == 4 ||$currentStep == 5)
            <button type="button" class="btn btn-sm btn-secondary btncss" wire:click="decreaseStep()">Back</button>
            @endif 

            @if($currentStep == 1 || $currentStep == 2 ||$currentStep == 3 ||$currentStep == 4)
            <button type="button" class="btn btn-sm btn-success btncss " wire:click="increaseStep()">Next</button>
            @endif 

            @if($currentStep == 5 )
            <button type="submit" class="btn btn-sm btn-primary btncss">Submit</button>
            @endif
        </div>
    </div>
</div>
