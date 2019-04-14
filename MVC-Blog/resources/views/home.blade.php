@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="font-size:25px;">
            <p>BIENVENUE</p>
            <div class="content">
                <div class="title m-b-md" style="font-size:90px;">
                    MVC-Blog
                </div>
<style>
            html, body {
                background-color: blue;
                color: green;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links {
                color: #636b6f;
                padding: 0 25px;
                font-size: 145px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
                <div class="links" style="font-size:30px;">
                    <a href="http://127.0.0.1:8000/user/{id}">Profil</a>
                    <a href="http://127.0.0.1:8000/billet">Recherche</a>
                    <a href="http://127.0.0.1:8000/billet/show">Publication</a>
                    <a href="http://127.0.0.1:8000/billet/new">Publier</a>
                    <a href="http://127.0.0.1:8000/contact">Contact</a>
                    
                </div>
            </div>

            <!-- <div class="card">
                <div class="card-header">cool
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div> -->
        </div>
    </div>
  
</div>
@endsection

 


