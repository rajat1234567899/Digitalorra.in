@include('header.header')

<div class="profile-container">
    <h2 class="profile-title">{{ $student->name }}</h2>

    <div class="profile-details">
        <div class="profile-picture">
            <img src="{{ asset('storage/'.$student->profile_picture) }}" alt="Profile Picture">
        </div>
        <div class="singlerow">
           
        <p><strong> Registration No.:</strong> {{ $student->registration_no }}</p>
        <p><strong> Registration Date:</strong> {{ $student->registration_date }}</p>
            <p><strong>Father Name:</strong> {{ $student->father_name }}</p>
            <p><strong>Department:</strong> {{ $student->branch }}</p>
            <div>
                @if($student->certificate)
                <div class="certificate-download">
                    <a href="{{ asset('storage/'.$student->certificate) }}" download class="download-btn">
                        Download Certificate
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('header.footer')

<style>
    .profile-picture {
        text-align: -webkit-center;
        width: 50%;
    }

    .profile-container {
        max-width: 70%;
        margin: 15% auto 5% auto;
        padding: 20px;
        border-radius: 8px;
        background: rgb(255, 255, 255);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .profile-title {
        font-size: 26px;
        font-weight: bold;
        text-align:left;
        margin-bottom: 20px;
        color: #333;
    }
    .profile-details {
        display:flex;

    }
    .profile-details p {
        font-size: 18px;
        margin: 8px 0;
        color: #555;
    }

    .profile-picture img {
        width: 100%;
        height: 100%; 
        object-fit: cover;
        border: 3px solid rgb(255, 88, 152);
    }
    .singlerow {
    width: 50%;
    padding:10px;
    text-align: justify;
}
    .certificate-download {
        margin-top: 20px;
    }

    .download-btn {
        display: inline-block;
        padding: 10px 20px;
        background: #007bff;
        color: white;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        border-radius: 6px;
        transition: 0.3s ease-in-out;
    }

    .download-btn:hover {
        background: #0056b3;
    }
</style>