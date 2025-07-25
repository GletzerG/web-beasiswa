@extends('back.layout.tamplate-hero')

@section('content')
      <style>
        .about-section {
            padding: 60px 0;
        }
        .about-image {
            border-radius: 12px;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <section class="about-section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="uploads/image.png" alt="About Us" class="about-image shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">About Us</h2>
                    <p class="text-muted">
                        We are a passionate team committed to delivering high-quality products and services to our clients.
                        Our mission is to empower businesses with technology that is easy to use, reliable, and scalable.
                    </p>
                    <p class="text-muted">
                        With years of experience in the industry, we have successfully delivered projects across various sectors,
                        helping clients achieve their goals efficiently.
                    </p>
                    <a href="https://www.youtube.com/channel/UCMki_UkHb4qSc0qyEcOHHJw" class="btn btn-primary mt-3">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection