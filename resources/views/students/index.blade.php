@include('header.header')

<div class="students-container">
    <div class="students-header">
        <h2>All Students</h2>
    </div>
    
    <div class="students-list">
        @foreach ($students as $student)
            <a href="{{ route('students.profile', $student->id) }}" class="student-item">
            <div class="profile-picture">
            <img src="{{ asset('storage/'.$student->profile_picture) }}" alt="Profile Picture">
        </div>
                <span class="student-name">{{ $student->name }}</span>
            </a>
        @endforeach
    </div>
</div>

@include('header.footer')

<style>
    .students-container {
        max-width: 800px;
        margin: 200px auto 30px auto;
        padding: 20px;
        border-radius: 8px;
        background: #f8f9fa;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .students-header h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }

    .students-list {
        display: flex;
        gap: 10px;
    }

    .student-item {
        display: block;
        padding: 12px 20px;
        background:#AFAFF5;
        border-radius: 6px;
        text-decoration: none;
        font-size: 18px;    
        font-weight: 500;
        color:rgb(255, 255, 255);
        transition: 0.3s ease-in-out;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }
    .student-item img {
        width: 200px;
        height:200px;        
        border-radius: 50%;

    }

    .student-item:hover {
    color: white;
    transform: translateY(-2px);
}
</style>
