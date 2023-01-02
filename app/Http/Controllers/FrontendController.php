<?php

namespace App\Http\Controllers;

use App\Mail\EmailSend;
use App\Models\AboutModel;
use App\Models\BlogCategoryModel;
use App\Models\BlogModel;
use App\Models\BlogTagModel;
use App\Models\ClientFeedbackModel;
use App\Models\ClientModel;
use App\Models\CompanyProfileModel;
use App\Models\CounterModel;
use App\Models\ManagementMessageModel;
use App\Models\MissionVisionValueModel;
use App\Models\ProjectCategoryModel;
use App\Models\ProjectModel;
use App\Models\SettingModel;
use App\Models\SliderModel;
use App\Models\StrengthModel;
use App\Models\WhyChooseModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Home Page
    public function HomePage()
    {
        //User get slider data at home page
        $sliderData = SliderModel::latest()->get();

        //User get home data at home page
        $aboutData = AboutModel::find(1);

        //User get corporate profile data at home page
        $profileData = CompanyProfileModel::find(1);

        //User get client feedback data at home page
        $clientFeedback = ClientFeedbackModel::oldest()->get();

        //User get client data at home page
        $clientData = ClientModel::oldest()->get();

        //User get news & events data at home page
        $blogData = BlogModel::latest()->paginate(4);

        return view('frontend.index', [
            'sliderData'     => $sliderData,
            'aboutData'      => $aboutData,
            'profileData'    => $profileData,
            'clientFeedback' => $clientFeedback,
            'clientData'     => $clientData,
            'blogData'       => $blogData,
        ]);
    }

    //Company Profile Page
    public function CompanyProfilePage()
    {
        //User get company profile data at about page
        $profileData = CompanyProfileModel::find(1);

        return view('frontend.company-profile', [
            'profileData' => $profileData,
        ]);
    }

    //Mission Vision & Value Page
    public function MissionVisionValuePage()
    {
        //User get mission, vision and value data at about page
        $dataList = MissionVisionValueModel::oldest()->get();

        //User get our strength data at about page
        $strength = StrengthModel::find(1);

        //User get why choose data at about page
        $why_choose = WhyChooseModel::find(1);

        //User get counter data at about page
        $counters = CounterModel::oldest()->get();

        return view('frontend.mission-vision-value', [
            'dataList'      => $dataList,
            'strength'      => $strength,
            'why_choose'    => $why_choose,
            'counters'      => $counters,
        ]);
    }

    //Chairman Message Page
    public function ChairmanMessagePage()
    {
        //User get cm, vice-cm message data at about page
        $message = ManagementMessageModel::oldest()->get();

        return view('frontend.chairman-message', [
            'message'       => $message,
        ]);
    }

    //Project Page
    public function ProjectsPage()
    {
        //User get prject data at about page
        $categories = ProjectCategoryModel::latest()->get();

        //User get prject data at about page
        $projects = ProjectModel::latest()->get();

        return view('frontend.project', [
            'categories'  => $categories,
            'projects'    => $projects,
        ]);
    }

    //Project Details Page
    public function ProjectDetailsPage($slug)
    {
        //Single project show in project single page
        $project = ProjectModel::where('slug', '=', $slug)->first();

        //Recent project in project single page
        $recentProject = ProjectModel::orderBy('created_at', 'desc')->paginate(10);

        return view('frontend.project-details', [
            'project'       => $project,
            'recentProject' => $recentProject,
        ]);
    }

    //All blog show in blog page and sidebar
    public function NewsEventsPage()
    {
        //User get blog data at blog page
        $blogData = BlogModel::latest()->paginate(6);

        //Blog category show in sidebar
        $blogCategory = BlogCategoryModel::orderBy('created_at', 'asc')->get();

        //Show tags show in sidebar
        $blogTag = BlogTagModel::orderBy('created_at', 'desc')->get();

        //Recent blog show in sidebar
        $recentBlog = BlogModel::orderBy('created_at', 'desc')->limit(10)->get();

        return view('frontend.blogs', [
            'blogData'      => $blogData,
            'blogCategory'  => $blogCategory,
            'blogTag'       => $blogTag,
            'recentBlog'    => $recentBlog,
        ]);
    }


    //Details blog show in blog details page and sidebar
    public function NewsEventsDetailsPage($slug)
    {
        //User get news & events data at home page
        $blogDetails = BlogModel::where('slug', '=', $slug)->first();

        //Blog category show in sidebar
        $blogCategory = BlogCategoryModel::orderBy('created_at', 'asc')->get();

        //Show tags show in sidebar
        $blogTag = BlogTagModel::orderBy('created_at', 'desc')->get();

        //Recent blog show in sidebar
        $recentBlog = BlogModel::orderBy('created_at', 'desc')->limit(10)->get();

        return view('frontend.details', [
            'blogDetails'  => $blogDetails,
            'blogCategory' => $blogCategory,
            'blogTag'      => $blogTag,
            'recentBlog'   => $recentBlog,
        ]);
    }


    //Categorywise blog list show in blog category page and sidebar
    public function NewsEventsCategoryPage($slug)
    {
        //CategoryWise blog show in category page
        $categoryWisePost = BlogCategoryModel::where('slug', $slug)->first();
        // dd($category)->posts;

        //Blog category show in sidebar
        $blogCategory = BlogCategoryModel::orderBy('created_at', 'asc')->get();

        //Show tags show in sidebar
        $blogTag = BlogTagModel::orderBy('created_at', 'desc')->get();

        //Recent blog show in sidebar
        $recentBlog = BlogModel::orderBy('created_at', 'desc')->limit(10)->get();

        return view('frontend.categories', [
            'categoryWisePost'  => $categoryWisePost,
            'blogCategory'      => $blogCategory,
            'blogTag'           => $blogTag,
            'recentBlog'        => $recentBlog,
        ]);
    }


    //Tagwise blog list show in blog tag page and sidebar
    public function NewsEventsTagPage($slug)
    {
        //User get tagwise blog data at blog tag page
        $tagData = BlogTagModel::where('slug', $slug)->first();

        //Blog category show in sidebar
        $blogCategory = BlogCategoryModel::orderBy('created_at', 'asc')->get();

        //Show tags show in sidebar
        $blogTag = BlogTagModel::orderBy('created_at', 'desc')->get();

        //Recent blog show in sidebar
        $recentBlog = BlogModel::orderBy('created_at', 'desc')->limit(10)->get();

        return view('frontend.tags', [
            'tagData'       => $tagData,
            'blogCategory'  => $blogCategory,
            'blogTag'       => $blogTag,
            'recentBlog'    => $recentBlog,
        ]);
    }


    //Contact us Page
    public function ContactPage()
    {
        //User get corporate profile data at contact page
        $contactData = SettingModel::find(1);

        return view('frontend.contact', [
            'contactData'   => $contactData,
        ]);
    }

    //Email send method
    public function EmailSend(Request $request)
    {
        $name     = $request->name;
        $email    = $request->email;
        $subject  = $request->subject;
        $phone    = $request->phone;
        $msg      = $request->msg;

        $sendMail = "mahbubkhan88@gmail.com";

        Mail::to($sendMail)->send(new EmailSend($name, $email, $subject, $phone, $msg));

        return redirect()->back()->with('flash_message', 'Mail sent successfully');
    }
}