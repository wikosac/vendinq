@extends('welcome.welcome')

@section('content')
    <div class="px-4 text-center" style="padding-top: 5rem; background-color: #fdff84">
        <h1 class="display-5 fw-bold pb-3">Get Started</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">VendinQ saves you time and reduces uncertainty by helping you to make informed data-driven decisions. You can finally get rid of those complicated Excel spreadsheets. See at a glance how your vending business is performing on the Dashboard – revenue and profit, top-selling products, and scheduled servicing.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            
        </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fdff84" fill-opacity="1" d="M0,32L30,64C60,96,120,160,180,170.7C240,181,300,139,360,122.7C420,107,480,117,540,149.3C600,181,660,235,720,256C780,277,840,267,900,229.3C960,192,1020,128,1080,101.3C1140,75,1200,85,1260,85.3C1320,85,1380,75,1410,69.3L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>

    <div class="container pb-5 rounded">
        <div class="p-5 mb-4 bg-light rounded-5">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">VendinQ</h1>
                <p class="col-md-8 fs-4">Streamline operations. Optimize inventory. Increase profit.</p>
                <button class="btn btn-primary btn-lg" type="button">
                    <a href="/register" class="text-light">Try for FREE</a>
                </button>
            </div>
        </div>
    </div>
@endsection