<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us — HireMe</title>
    @include('layouts.head')
</head>

<body class="bg-white text-hireme-dark min-h-screen flex flex-col">

    @include('layouts.navbar')

    <!-- Main Content -->
    <main class="flex-grow py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-hireme mb-4">About Us</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                HireMe is a recruitment platform built for the future. We connect employers, recruiters, and job seekers through intelligent features, a sleek interface, and verified profiles—no app needed.
            </p>
        </div>

        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-hireme">Meet Our Founders</h2>
        </div>

        <div class="space-y-10 max-w-5xl mx-auto">
            @php
            $team = [
            [
            'name' => 'Bernard Choong',
            'role' => 'Chief Executive Officer (CEO)',
            'traits' => 'Visionary Strategist | Business Architect | Leadership-Driven Growth',
            'bio' => 'Bernard brings over a decade of leadership in corporate development and business transformation. With a background in business strategy and market expansion, he has successfully led several startups to scale across Southeast Asia. At HireMe, Bernard oversees the overall vision, strategic direction, and high-level partnerships, ensuring the platform delivers real value to employers, recruiters, and job seekers alike. His experience in managing investor relations, forging B2B alliances, and driving sustainable growth gives HireMe the business acumen and industry credibility it needs in a competitive HR-tech market.',
            'image' => asset('bernard.png')
            ],
            [
            'name' => 'Bryan Kok',
            'role' => 'Chief Technology Officer (CTO)',
            'traits' => 'Full-Stack Technologist | System Architect | Innovation Catalyst',
            'bio' => 'With a strong foundation in computer science, cloud infrastructure, and full-stack web development, Bryan is the mastermind behind the HireMe platform. He has spent years building scalable systems and secure web-based solutions that serve thousands of concurrent users. At HireMe, Bryan leads the entire product and technology stack, including the intelligent resume generator, KYC verification module, and credit-based resume unlocking system. His technical leadership ensures that HireMe is fast, secure, mobile-ready, and built to scale across global markets — without the need for an app.',
            'image' => asset('bryan.png')
            ],
            [
            'name' => 'Jason Na',
            'role' => 'Chief Financial Officer (CFO)',
            'traits' => 'Financial Strategist | Risk Manager | Data-Driven Decision Maker',
            'bio' => 'Jason is a seasoned financial expert with extensive experience in managing startup capital, operational budgeting, and financial compliance. Having worked in both fintech and recruitment industries, Jason brings an understanding of monetization strategies and financial modeling that’s critical for HireMe’s long-term success. As CFO, he designs the credit system for employers, manages premium badge pricing models, and ensures all financial transactions — from subscriptions to recruiter tools — are transparent, secure, and profitable.',
            'image' => asset('jasonNa.png')
            ],
            [
            'name' => 'Christian Lau',
            'role' => 'Chief Marketing Officer (CMO)',
            'traits' => 'Growth Hacker | Brand Strategist | Market Expansion Specialist',
            'bio' => 'Christian is a creative marketing force with deep experience in digital marketing, branding, and user acquisition. He has led several B2C and B2B campaigns in the HR-tech and SaaS industries, helping brands achieve viral growth through storytelling and data-driven performance marketing. At HireMe, Christian is responsible for brand identity, user growth campaigns, SEO/SEM, and influencer outreach.',
            'image' => asset('christian.png')
            ],
            [
            'name' => 'Jason Ong',
            'role' => 'Chief Operating Officer (COO)',
            'traits' => 'Operations Leader | UX Advocate | Platform Optimizer',
            'bio' => 'Jason Ong is the operational backbone of HireMe. With hands-on experience in HR process optimization and platform operations, he ensures seamless execution across departments — from customer support to product updates. He has a background in UI/UX design and process automation, making him the ideal fit for managing HireMe’s cross-platform functionality, ensuring web performance, and user satisfaction across mobile, tablet, and desktop devices.',
            'image' => asset('jasonOng.png')
            ],
            ];
            @endphp

            @foreach ($team as $member)
            <div class="flex flex-col md:flex-row bg-hireme-light p-6 rounded shadow-md items-center gap-6">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-48 h-48 object-cover rounded shadow-md">
                <div class="text-left">
                    <h3 class="text-xl font-bold text-hireme">{{ $member['name'] }}</h3>
                    <p class="text-sm text-gray-600 italic mb-2">{{ $member['role'] }}</p>
                    <p class="text-sm font-medium text-hireme-dark mb-2">{{ $member['traits'] }}</p>
                    <p class="text-gray-700 text-sm">{{ $member['bio'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    @include('layouts.footer')
</body>

</html>