<?php

namespace App\Http\Controllers;

use App\Models\Blogcategory;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Member;
use App\Models\News;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Review;
use App\Models\Services;
use App\Models\Sliders;

class FrontendController extends Controller
{
    public function home()
    {
        //Sliders
        $sliders = Sliders::oldest('order')->first();
        $partners = Partner::where('status', 1)->oldest('order')->get();
        $counters = Counter::oldest('order')->get();
        $blogs = News::where('status', 1)->limit(6)->get();
        $teams = Member::where('status', 1)->oldest('order')->limit(8)->get();
        $services = Services::where('status', 1)->oldest('order')->limit(4)->get();
        $projects = Project::where('status', 1)->oldest('order')->limit(4)->get();
        $projects = Project::where('status', 1)->oldest('order')->limit(4)->get();
        $whowe = Page::whereId(7)->where('status', 1)->first();
        
        $revs = Review::where('status', 1)->limit(5)->get();
        $request = Page::where('status', 1)->where('slug', 'request-area')->first();
        $consult = Page::where('status', 1)->where('slug', 'consulting-area')->first();

        return view('frontend.home.index', compact(['sliders', 'partners', 'blogs', 'teams', 'counters', 'services', 'projects', 'whowe', 'revs', 'request', 'consult']));
    }

    public function pagesingle($slug)
    {
        $content = Page::where('slug', $slug)->where('status', 1)->first();
        if ($content) {

            if ($content->template == 1) {

                return view('frontend.page.side', compact('content'));
            } elseif ($content->template == 2) {

                $reviews = Review::oldest('order')->limit(4)->get();
                $teams = Member::oldest('order')->limit(6)->get();
                $counters = Counter::oldest('order')->get();
                $projects = Project::where('status', 1)->oldest('order')->limit(4)->get();
                $faqs = Faq::where('status', 1)->oldest('order')->limit(3)->get();
                $partners = Partner::where('status', 1)->oldest('order')->get();
                $services = Services::where('status', 1)->get();
                return view('frontend.page.about', compact(['content', 'teams', 'reviews', 'counters', 'projects', 'faqs', 'partners', 'services']));
            } elseif ($content->template == 3) {

                return view('frontend.page.contact', compact('content'));
            } elseif ($content->template == 4) {

                $teams = Member::oldest('order')->get();
                return view('frontend.page.team', compact(['content', 'teams']));
            } elseif ($content->template == 5) {

                $reviews = Review::oldest('order')->get();
                $revs = Review::where('status', 1)->get();
                return view('frontend.page.review', compact(['content', 'reviews', 'revs']));
            } elseif ($content->template == 6) {

                $faqs = Faq::oldest('order')->get();
                return view('frontend.page.faq', compact(['content', 'faqs']));
            } elseif ($content->template == 7) {

                $partners = Partner::where('status', 1)->oldest('order')->get();
                return view('frontend.page.partner', compact(['content', 'partners']));
            } elseif ($content->template == 8) {

                $blogs = News::latest()->get();
                $categorys = Blogcategory::where('status', 1)->where('parent_id', 0)->limit(5)->get();
                return view('frontend.page.blog', compact('content', 'blogs', 'categorys'));
            } elseif ($content->template == 9) {

                $services = Services::where('status', 1)->get();
                return view('frontend.page.service', compact(['content', 'services']));
            } elseif ($content->template == 10) {

                return view('frontend.page.gallery', compact(['content']));
            } elseif ($content->template == 11) {

                $categorys = BlogCategory::where('status', 1)->where('parent_id', 0)->oldest('order')->paginate(12);
                return view('frontend.page.blogcategory', compact(['content', 'categorys']));
            } elseif ($content->template == 12) {

                $projects = Project::where('status', 1)->oldest('order')->get();
                // $category = Project::orderBy('category')->where('status', 1)->oldest()->get();
                $category = $category = Project::where('status', 1)
                    ->oldest('order')
                    ->get()
                    ->groupBy('category');
                return view('frontend.page.project', compact(['content', 'projects', 'category']));
            } elseif ($content->template == 14) {

                return view('frontend.page.payment', compact(['content']));
            } elseif ($content->template == 13) {

                $all_blogs = News::get();
                $all_pages = Page::where('status', 1)->get();
                $all_blog_cats = BlogCategory::where('status', 1)->get();
                $all_servs = Services::where('status', 1)->get();
                return response()->view('frontend.page.sitemap', compact(['all_blogs', 'all_pages', 'all_blog_cats', 'all_servs']))->header('Content-Type', 'text/xml');
            } else {

                $blogs = News::where('status', 1)->limit(5)->get();
                $categorys = Blogcategory::where('status', 1)->limit(5)->get();

                return view(
                    'frontend.page.default',
                    compact(['content', 'blogs', 'categorys'])
                );
            }
        } else {
            return view('errors.404');
        }
    }

    public function blogsingle($slug)
    {
        $content = News::where('slug', $slug)->where('status', 1)->first();
        if ($content) {
            $blogs = News::where('status', 1)->where('id', '!=', $content->id)->limit(5)->get();
            $categorys = Blogcategory::where('status', 1)->limit(5)->get();
            return view('frontend.blog.show', compact(['content', 'blogs', 'categorys']));
        } else {
            return view('errors.404');
        }
    }

    public function servicesingle($slug)
    {
        $content = Services::where('slug', $slug)->where('status', 1)->first();
        if ($content) {
            $services = Services::where('status', 1)->where('id', '!=', $content->id)->limit(5)->get();
            return view('frontend.service.show', compact(['content', 'services']));
        } else {
            return view('errors.404');
        }
    }
    public function projectsingle($slug)
    {
        $content = Project::where('slug', $slug)->where('status', 1)->first();
        if ($content) {
            $projects = Project::where('status', 1)->where('id', '!=', $content->id)->limit(5)->get();
            return view('frontend.project.show', compact(['content', 'projects']));
        } else {
            return view('errors.404');
        }
    }

    public function categorysingle($slug)
    {
        $content = Blogcategory::where('slug', $slug)->first();
        if ($content) {
            $subcategories = BlogCategory::where('parent_id', $content->id)->oldest('order')->get();
            $blogs = News::whereHas('blogcategory', function ($q) use ($slug) {
                $q->where('slug', '=', $slug);
            })->get();
            return view('frontend.blogcategory.show', compact('content', 'subcategories', 'blogs'));
        } else {
            return view('errors.404');
        }
    }


}
