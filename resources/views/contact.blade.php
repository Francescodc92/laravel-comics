@extends('layouts.main')

@section('page-title')
Contatti
@endsection

@section('main-content')
<div class="bg-contact">
  <div class="container py-5 d-flex gap-5"> 
    <div class="contact-left text-white">
      <h2 class="text-white text-uppercase">contatti</h2>
      <h3>
        Hai bisogno di ulteriori informazioni ?
      </h3>
      <p>contattaci attaverso:</p>
      <p>
        la nostra email:
        <a href="#" class="text-light fw-bold">esempio@esempio.com</a>
      </p>
      <p>
        telefonicamente 
        <span class="text-light fw-bold">3333334452</span> 
      </p>
    </div>
    <div class="contact-right w-50">
      <h3 class="text-white">Oppure contattaci tramite il seguente form</h3>
      <form class="text-white ">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name </label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="last-name" class="form-label">Last Name </label>
          <input type="text" class="form-control" id="last-name">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  
    </div>
  </div>
</div>
@endsection
