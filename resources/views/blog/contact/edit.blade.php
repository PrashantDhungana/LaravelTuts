<div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="contact_main">
                     <h1 class="contact_taital">Contact Us</h1>
                     <form action="{{route('contact.update',$contact->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                           <input type="text" class="email-bt" value="{{$contact->name}}"placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" value="{{$contact->email}}" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" value="{{$contact->phone_number}}" placeholder="Phone Number" name="phone_number">
                        </div>
                        <div class="form-group">
                           <textarea class="message-bt" value="{{$contact->message}}" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                        </div>
                    <div>
                     <button type="submit" class="btn btn-lg btn-info form-control m-2" name="submit">SEND</button></div>
                  </div>
                </form>
               </div>
            </div>
        </div>
    </div>
  </div>
</div>