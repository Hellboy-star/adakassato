@extends('def.def', ['titre'=>'Prédications'])

@section('content')
<div class="sidebar-wrapper">
  <ul class="nav">
  <li>
      <a href="{{('/dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p>Tableau de bord</p>
      </a>
    </li>
    <li>
      <a href="{{('/predication')}}">
        <i class="nc-icon nc-note-03"></i>
        <p>Prédication</p>
      </a>
    </li>
    <li>
      <a href="{{('/evenement')}}">
        <i class="nc-icon nc-calendar-60"></i>
        <p>Evènements</p>
      </a>
    </li>
    <li class="active ">
      <a href="https://sandbox-me.fedapay.com/CuOUfHcE">
        <i class="nc-icon nc-money-coins"></i>
        <p>Souscription</p>
      </a>
    </li>
    <li>
      <a href="{{('/formulaire')}}">
        <i class="nc-icon nc-single-copy-04"></i>
        <p>Formulaires</p>
      </a>
    </li>
    <!-- <li>
      <a href="{{('/')}}">
        <i class="nc-icon nc-pin-3"></i>
        <p>A Propos</p>
      </a>
    </li> -->
    <li>
      <a href="{{('/profile')}}">
        <i class="nc-icon nc-single-02"></i>
        <p>Profil Utilisateur</p>
      </a>
    </li>
  </ul>
</div>
@endsection



@section('contenta')
<div class="container">
  <div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
      <!-- <button id="pay-btn"
        data-transaction-amount="1000"
        data-transaction-description="Buy my product"
        data-customer-email="johndoe@gmail.com"
        data-customer-lastname="Doe"
        >Pay 1000 FCFA
      </button> -->
      <a href="https://sandbox-me.fedapay.com/CuOUfHcE">
        <button>Faire un don</button>
      </a>
    </div>
  </div>
</div>

<script type="text/javascript">
  let widget =  FedaPay.init({
    public_key: 'YOUR_API_PUBLIC_KEY'
  });
  let btn = document.getElementById('pay-btn');
  btn.addEventListener('click', () => {
    widget.open();
  });
</script>
@endsection