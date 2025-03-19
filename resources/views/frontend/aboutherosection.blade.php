<abouthero class="flex items-center justify-center min-h-screen bg-gray-900 bg-opacity-50">
  <div class="about-ussection">
    <div class="about-title">
    <?php
use App\Models\Aboutuscontents;
?>
{!! aboutuscontents::where('section', 'Welcome')->value('content') !!}</div>

    <div class="about-text">{!! aboutuscontents::where('section', 'Aboutherocontent')->value('content') !!}</div>
    <a href="#" class="about-button">Discover More <span>→</span></a>
  </div>
  
    <div class="form">
               <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h4 class="text-2xl font-semibold">Check Your Eligibility</h4>
            <p>Use this template to create a course evaluation</p>
            <form>
                <div class="mb-4">
                    <label for="instructor-name" class="block text-left text-gray-700">Instructor name</label>
                    <input type="text" id="instructor-name" class="w-full px-3 py-2 border border-gray-300 rounded"
                        placeholder="Instructor name">
                </div>
                <div class="mb-6">
                    <label for="course" class="block text-left text-gray-700">Course</label>
                    <input type="text" id="course" class="w-full px-3 py-2 border border-gray-300 rounded"
                        placeholder="Course">
                </div>
                <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded">CONTINUE</button>
            </form>
           
        </div>
    </div>
</abouthero>