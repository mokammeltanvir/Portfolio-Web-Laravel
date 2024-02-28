<section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{$contactTitle->title}}</h3>
                    <div class="desc">
                        <p>{{$contactTitle->sub_title}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" id="form-name" class="input-box"
                                    placeholder="Name">
                                <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="email" id="form-email" class="input-box"
                                    placeholder="Email">
                                <label for="form-email" class="icon lb-email"><i
                                        class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="subject" id="form-subject" class="input-box"
                                    placeholder="Subject">
                                <label for="form-subject" class="icon lb-subject"><i
                                        class="fal fa-check-square"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea class="input-box" id="form-message" placeholder="Message" cols="30"
                                    rows="4" name="message"></textarea>
                                <label for="form-message" class="icon lb-message"><i
                                        class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" type="submit" id="submit_btn">Send Now <span
                                        class="dir-part"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Contact-Form / -->
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script>
    $(document).ready(function(){
        // Csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#contact-form', function(e){
            e.preventDefault();
            $.ajax({
                    type: "POST",
                    url: "{{route('contact')}}",
                    data: $(this).serialize(),
                    beforeSend: function(){
                        $('#submit_btn').prop("disabled", true);
                        $('#submit_btn').text('Loading...');
                    },
                    success: function(response){
                        console.log(response);
                        if(response.status == 'success'){
                            toastr.success(response.message);
                            $('#submit_btn').prop("disabled", false);
                            $('#submit_btn').text('Send Now');
                            $('#contact-form').trigger('reset');
                        }
                    },
                    error: function(response){
                       if(response.status == 422){
                        let errorsMessage = $.parseJSON(response.responseText);

                        $.each(errorsMessage.errors, function(key, val){
                            console.log(val[0]);
                            toastr.error(val[0])
                        })
                        $('#submit_btn').prop("disabled", false);
                        $('#submit_btn').text('Send Now');

                       }
                    }
            })
        })
    })

</script>
@endpush
