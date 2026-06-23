<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContent;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            // ==========================================
            // HOME PAGE
            // ==========================================
            ['page' => 'Home', 'section' => 'Hero', 'key' => 'hero_headline', 'type' => 'text', 'content' => 'Empowering visually impaired girls to build <span>their future.</span>'],
            ['page' => 'Home', 'section' => 'Hero', 'key' => 'hero_description', 'type' => 'text', 'content' => 'Through specialized braille education, secure hostel care, and mobility training, we provide the foundation for lifelong independence and confidence.'],
            ['page' => 'Home', 'section' => 'Hero', 'key' => 'hero_image', 'type' => 'image', 'content' => '/extracted_images/image17.jpeg'],

            ['page' => 'Home', 'section' => 'Mission', 'key' => 'mission_headline', 'type' => 'text', 'content' => 'Dedicated to every girl\'s potential.'],
            ['page' => 'Home', 'section' => 'Mission', 'key' => 'mission_description', 'type' => 'text', 'content' => "Roshni School is a specialized educational and residential community founded on a simple belief: visual impairment should never dictate a child's future.<br><br>Through customized braille education, unwavering emotional support, and intensive mobility training, we create an environment where young women can shatter expectations. We don't just provide shelter; we build the foundation for lifelong independence, leadership, and joy."],
            ['page' => 'Home', 'section' => 'Mission', 'key' => 'mission_image_1', 'type' => 'image', 'content' => '/extracted_images/image11.jpeg'],
            ['page' => 'Home', 'section' => 'Mission', 'key' => 'mission_image_2', 'type' => 'image', 'content' => '/extracted_images/image12.jpeg'],

            ['page' => 'Home', 'section' => 'Approach', 'key' => 'approach_headline', 'type' => 'text', 'content' => 'A holistic model for lifelong success.'],
            ['page' => 'Home', 'section' => 'Approach', 'key' => 'approach_description', 'type' => 'text', 'content' => 'We don\'t just provide shelter. We operate a comprehensive ecosystem designed to equip visually impaired girls with the tools they need to conquer the world.'],

            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeals_headline', 'type' => 'text', 'content' => 'Make an immediate difference.'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeals_description', 'type' => 'text', 'content' => 'Choose a specific cause to support right now. 100% of your donation goes directly towards funding these critical initiatives for our students.'],
            
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_1_title', 'type' => 'text', 'content' => 'Sponsor a Student\'s Education'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_1_description', 'type' => 'text', 'content' => 'Provide complete braille educational resources, textbooks, and tuition for one full year.'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_1_image', 'type' => 'image', 'content' => '/extracted_images/image13.jpeg'],

            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_2_title', 'type' => 'text', 'content' => 'Support Secure Hostel Care'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_2_description', 'type' => 'text', 'content' => 'Fund a month of safe, fully-equipped residential living, including nutritious daily meals.'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_2_image', 'type' => 'image', 'content' => '/extracted_images/image14.jpeg'],

            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_3_title', 'type' => 'text', 'content' => 'Mobility Independence Kit'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_3_description', 'type' => 'text', 'content' => 'Equip a student with a professional white cane and comprehensive navigational training.'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_3_image', 'type' => 'image', 'content' => '/extracted_images/image15.jpeg'],

            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_4_title', 'type' => 'text', 'content' => 'General Welfare Fund'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_4_description', 'type' => 'text', 'content' => 'Allow us to allocate your donation to the most urgent requirements of the care home today.'],
            ['page' => 'Home', 'section' => 'Appeals', 'key' => 'appeal_4_image', 'type' => 'image', 'content' => '/extracted_images/image16.jpeg'],

            // ==========================================
            // ABOUT PAGE
            // ==========================================
            ['page' => 'About', 'section' => 'Hero', 'key' => 'about_hero_title', 'type' => 'text', 'content' => 'Bringing Light into<br>Darkness'],
            ['page' => 'About', 'section' => 'Hero', 'key' => 'about_hero_subtitle', 'type' => 'text', 'content' => 'Founded with a simple mission: to provide specialized care, education, and love to those who need it most.'],
            ['page' => 'About', 'section' => 'Hero', 'key' => 'about_hero_image', 'type' => 'image', 'content' => '/extracted_images/image9.jpeg'],

            ['page' => 'About', 'section' => 'Mission & Vision', 'key' => 'about_mission_text', 'type' => 'text', 'content' => 'To foster independence and academic excellence in a supportive, emotionally resilient environment.'],
            ['page' => 'About', 'section' => 'Mission & Vision', 'key' => 'about_vision_text', 'type' => 'text', 'content' => 'A world where every individual, regardless of their circumstances, has the tools to succeed and shine brightly.'],

            ['page' => 'About', 'section' => 'History', 'key' => 'about_history_title', 'type' => 'text', 'content' => 'How It All Began'],
            ['page' => 'About', 'section' => 'History', 'key' => 'about_history_p1', 'type' => 'text', 'content' => 'Roshni Care Home started as a small initiative by passionate educators and caregivers who noticed a significant gap in specialized, tactile education and emotional support for vulnerable youth.'],
            ['page' => 'About', 'section' => 'History', 'key' => 'about_history_p2', 'type' => 'text', 'content' => 'Over the years, we have grown into a comprehensive institution that doesn\'t just provide shelter, but active, holistic development. Our journey is paved with the success stories of the countless lives we\'ve touched.'],
            ['page' => 'About', 'section' => 'History', 'key' => 'about_history_image', 'type' => 'image', 'content' => '/extracted_images/image10.jpeg'],
            // Video Option
            ['page' => 'About', 'section' => 'History', 'key' => 'about_history_video', 'type' => 'video', 'content' => null],

            // ==========================================
            // PROGRAMS PAGE
            // ==========================================
            ['page' => 'Programs', 'section' => 'Hero', 'key' => 'programs_hero_title', 'type' => 'text', 'content' => 'Empowering the Future'],
            ['page' => 'Programs', 'section' => 'Hero', 'key' => 'programs_hero_subtitle', 'type' => 'text', 'content' => 'Comprehensive, structured programs designed to nurture, educate, and build lifelong resilience.'],
            
            ['page' => 'Programs', 'section' => 'Academia', 'key' => 'programs_academia_title', 'type' => 'text', 'content' => 'Specialized Academia'],
            ['page' => 'Programs', 'section' => 'Academia', 'key' => 'programs_academia_desc', 'type' => 'text', 'content' => 'A tailored curriculum focusing on tactile learning, cognitive development, and intellectual curiosity. We believe that every mind works differently, and our educators are trained to unlock the unique potential within every student.'],
            ['page' => 'Programs', 'section' => 'Academia', 'key' => 'programs_academia_image', 'type' => 'image', 'content' => '/extracted_images/image1.jpeg'],

            ['page' => 'Programs', 'section' => 'Resilience', 'key' => 'programs_resilience_title', 'type' => 'text', 'content' => 'Emotional Resilience'],
            ['page' => 'Programs', 'section' => 'Resilience', 'key' => 'programs_resilience_desc', 'type' => 'text', 'content' => 'Mental health is the foundation of a successful life. Our psychological support staff works daily with our youths to process trauma, build self-worth, and develop robust emotional coping mechanisms.'],
            ['page' => 'Programs', 'section' => 'Resilience', 'key' => 'programs_resilience_image', 'type' => 'image', 'content' => '/extracted_images/image2.jpeg'],

            ['page' => 'Programs', 'section' => 'Independence', 'key' => 'programs_independence_title', 'type' => 'text', 'content' => 'Tactile Independence'],
            ['page' => 'Programs', 'section' => 'Independence', 'key' => 'programs_independence_desc', 'type' => 'text', 'content' => 'Preparing for the real world. We teach essential life skills—from financial literacy to vocational training—ensuring that our graduates can step into society with confidence and capability.'],
            ['page' => 'Programs', 'section' => 'Independence', 'key' => 'programs_independence_image', 'type' => 'image', 'content' => '/extracted_images/image3.jpeg'],

            // ==========================================
            // IMPACT PAGE
            // ==========================================
            ['page' => 'Impact', 'section' => 'Hero', 'key' => 'impact_hero_title', 'type' => 'text', 'content' => 'Lives Changed,<br>Futures Brightened'],
            ['page' => 'Impact', 'section' => 'Hero', 'key' => 'impact_hero_subtitle', 'type' => 'text', 'content' => 'Numbers tell a part of our story, but the real impact is measured in the smiles, independence, and success of the youth we support.'],
            ['page' => 'Impact', 'section' => 'Hero', 'key' => 'impact_hero_image', 'type' => 'image', 'content' => '/extracted_images/image4.jpeg'],
            // Video Option
            ['page' => 'Impact', 'section' => 'Hero', 'key' => 'impact_hero_video', 'type' => 'video', 'content' => null],

            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat1_num', 'type' => 'text', 'content' => '5,000+'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat1_label', 'type' => 'text', 'content' => 'Lives Touched'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat2_num', 'type' => 'text', 'content' => '100%'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat2_label', 'type' => 'text', 'content' => 'Commitment'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat3_num', 'type' => 'text', 'content' => '50+'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat3_label', 'type' => 'text', 'content' => 'Programs Launched'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat4_num', 'type' => 'text', 'content' => '12'],
            ['page' => 'Impact', 'section' => 'Stats', 'key' => 'impact_stat4_label', 'type' => 'text', 'content' => 'Years of Service'],

            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_stories_title', 'type' => 'text', 'content' => 'Voices of Hope'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_stories_subtitle', 'type' => 'text', 'content' => 'Read the inspiring stories of those who have walked through our doors.'],

            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story1_text', 'type' => 'text', 'content' => '"Before coming to Roshni Care, I felt lost. The vocational training gave me not just skills, but the confidence to start my own small business. I am now independent."'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story1_author', 'type' => 'text', 'content' => 'Ahmad S.'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story1_role', 'type' => 'text', 'content' => 'Graduate, 2023'],

            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story2_text', 'type' => 'text', 'content' => '"The emotional resilience workshops changed my life. I learned how to process my past and look forward to a future filled with light and opportunity."'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story2_author', 'type' => 'text', 'content' => 'Fatima K.'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story2_role', 'type' => 'text', 'content' => 'Alumni'],

            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story3_text', 'type' => 'text', 'content' => '"The educators here don\'t just teach; they mentor. The personalized academic plan helped me secure a scholarship to university. I am forever grateful."'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story3_author', 'type' => 'text', 'content' => 'Omar R.'],
            ['page' => 'Impact', 'section' => 'Stories', 'key' => 'impact_story3_role', 'type' => 'text', 'content' => 'University Student'],

            ['page' => 'Impact', 'section' => 'Preview Gallery', 'key' => 'impact_gallery_image1', 'type' => 'image', 'content' => '/extracted_images/image5.jpeg'],
            ['page' => 'Impact', 'section' => 'Preview Gallery', 'key' => 'impact_gallery_image2', 'type' => 'image', 'content' => '/extracted_images/image6.jpeg'],
            ['page' => 'Impact', 'section' => 'Preview Gallery', 'key' => 'impact_gallery_image3', 'type' => 'image', 'content' => '/extracted_images/image7.jpeg'],
            ['page' => 'Impact', 'section' => 'Preview Gallery', 'key' => 'impact_gallery_image4', 'type' => 'image', 'content' => '/extracted_images/image8.jpeg'],

            // ==========================================
            // GALLERY PAGE
            // ==========================================
            ['page' => 'Gallery', 'section' => 'Hero', 'key' => 'gallery_hero_title', 'type' => 'text', 'content' => 'A Picture Speaks a<br>Thousand Words'],
            ['page' => 'Gallery', 'section' => 'Hero', 'key' => 'gallery_hero_subtitle', 'type' => 'text', 'content' => 'Explore the moments of joy, learning, and growth captured throughout our programs.'],
            ['page' => 'Gallery', 'section' => 'Hero', 'key' => 'gallery_hero_image', 'type' => 'image', 'content' => '/extracted_images/image4.jpeg'],
        ];

        // Seed 48 masonry images dynamically for the gallery section
        for ($i = 1; $i <= 48; $i++) {
            $contents[] = [
                'page' => 'Gallery',
                'section' => 'Masonry',
                'key' => 'gallery_image_' . $i,
                'type' => 'image',
                'content' => '/extracted_images/image' . $i . '.jpeg'
            ];
        }

        foreach ($contents as $content) {
            SiteContent::updateOrCreate(
                ['key' => $content['key']],
                $content
            );
        }
    }
}
