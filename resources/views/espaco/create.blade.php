@extends('layouts.basico')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Novo Espaço</h4>
            <form class="needs-validation" novalidate="">
              <div class="row g-3">
                <div class="col-12">
                  <label for="firstName" class="form-label">Nome do Espaço</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">CEP</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" placeholder="xxxxx-xxx">
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>
    
                <div class="col-10">
                  <label for="email" class="form-label">Logradouro</label>
                  <input type="email" class="form-control">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                <div class="col-2">
                  <label for="email" class="form-label">Número</label>
                  <input type="email" class="form-control">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Bairro</label>
                  <input type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-6">
                  <label for="address2" class="form-label">Cidade</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-6">
                  <label for="address2" class="form-label">UF</label>
                  <input type="text" class="form-control" >
                </div>
{{--     
                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required="">
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required="">
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div> --}}
    
              <hr class="my-4">
              
                
                <div class="col-md-6">
                    <label for="country" class="form-label">Esporte</label>
                    <select class="form-select" id="country" required="">
                        <option value="">Escolha</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="country" class="form-label">Nomero de Vagas</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
            
                <div class="col-md-6">
                    <label for="country" class="form-label">Horario inicial</label>
                    <select class="form-select" id="country" required="">
                    <option value="">Escolha</option>
                    <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid country.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="country" class="form-label">Horario Final</label>
                    <select class="form-select" id="country" required="">
                    <option value="">Escolha</option>
                    <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid country.
                    </div>
                </div>

              {{-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div> --}}
    
              <hr class="my-4">
    
              <h4 class="mb-3">Tipo de Espaço</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                  <label class="form-check-label" for="credit">Espaço Publico</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="debit">Espaço Privado</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>
    
              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-body-secondary">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
          </div>
    </div>
</div>
@endsection