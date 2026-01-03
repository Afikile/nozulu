@extends('layouts.main')

@section('content')
<!-- Jumbotron Hero Section with Background Image -->
<div style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920&h=800&fit=crop'); background-size: cover; background-position: center; padding: 6rem 2rem; text-align: center; position: relative; overflow: hidden;">
    <!-- Dark Overlay with Gradient -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(30, 58, 138, 0.92) 0%, rgba(37, 99, 235, 0.88) 50%, rgba(220, 38, 38, 0.92) 100%);"></div>
    
    <!-- Animated Pattern Overlay -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.1) 35px, rgba(255,255,255,.1) 70px); pointer-events: none;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <h1 style="font-size: 3.5rem; font-weight: 800; color: white; margin-bottom: 1.5rem; text-shadow: 3px 3px 6px rgba(0,0,0,0.5); line-height: 1.2;">
            Nozulu and Ngonyama Trading Enterprises
        </h1>
        <p style="font-size: 1.8rem; color: white; margin-bottom: 2.5rem; font-weight: 500; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
            Specialists in Building and Electrical Construction
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('gallery') }}" style="background: white; color: #1e3a8a; padding: 1rem 2.5rem; border-radius: 50px; font-weight: 700; font-size: 1.1rem; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.3); transition: all 0.3s; display: inline-block;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.3)'">
                View Our Projects
            </a>
            <a href="{{ route('contact') }}" style="background: #dc2626; color: white; padding: 1rem 2.5rem; border-radius: 50px; font-weight: 700; font-size: 1.1rem; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.3); transition: all 0.3s; display: inline-block;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 12px rgba(0,0,0,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.3)'">
                Get in Touch
            </a>
        </div>
        
        <!-- Stats Section -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; margin-top: 3rem; max-width: 800px; margin-left: auto; margin-right: auto;">
            <div style="background: rgba(255,255,255,0.25); padding: 1.5rem; border-radius: 12px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                <div style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 0.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">15+</div>
                <div style="color: white; font-weight: 600; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Years Experience</div>
            </div>
            <div style="background: rgba(255,255,255,0.25); padding: 1.5rem; border-radius: 12px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                <div style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 0.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">100+</div>
                <div style="color: white; font-weight: 600; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Projects Completed</div>
            </div>
            <div style="background: rgba(255,255,255,0.25); padding: 1.5rem; border-radius: 12px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                <div style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 0.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">100%</div>
                <div style="color: white; font-weight: 600; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Client Satisfaction</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section style="text-align: center; margin: 3rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">Welcome to Our Company</h2>
        <p style="font-size: 1.1rem; color: #4b5563; max-width: 800px; margin: 0 auto;">
            With years of experience in the construction and electrical industry, we deliver high-quality 
            projects on time and within budget. Our team of skilled professionals is committed to excellence 
            in every project we undertake.
        </p>
    </section>

    <section style="margin: 3rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; text-align: center; margin-bottom: 2rem;">Our Services</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <h3 style="color: #dc2626; margin-bottom: 1rem;">Building Construction</h3>
                <p style="color: #4b5563;">
                    Residential and commercial building construction, renovations, and project management services.
                </p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <h3 style="color: #dc2626; margin-bottom: 1rem;">Electrical Services</h3>
                <p style="color: #4b5563;">
                    Complete electrical installation, maintenance, and repair services for all types of buildings.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Showcase Section -->
    <section style="margin: 4rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; text-align: center; margin-bottom: 2rem;">Our Work in Action</h2>
        <p style="text-align: center; color: #4b5563; margin-bottom: 3rem;">Explore our portfolio of completed construction and electrical projects</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            <!-- Construction Work Images -->
            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop" alt="Construction Site" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Commercial Building</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Construction Works</p>
                </div>
            </div>

            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&h=600&fit=crop" alt="Electrical Work" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Electrical Installation</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Electrical Works</p>
                </div>
            </div>

            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop" alt="Building Construction" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Residential Project</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Construction Works</p>
                </div>
            </div>

            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=800&h=600&fit=crop" alt="Electrical Panel" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Electrical Systems</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Electrical Works</p>
                </div>
            </div>

            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1590479773265-7464e5d48118?w=800&h=600&fit=crop" alt="Construction Equipment" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Heavy Construction</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Construction Works</p>
                </div>
            </div>

            <div style="position: relative; overflow: hidden; border-radius: 8px; height: 300px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&h=600&fit=crop" alt="Electrical Maintenance" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 2rem 1rem 1rem; color: white;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 0.5rem;">Power Distribution</h3>
                    <p style="font-size: 0.9rem; color: #ef4444;">Electrical Works</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('gallery') }}" style="display: inline-block; background-color: #dc2626; color: white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#b91c1c'" onmouseout="this.style.backgroundColor='#dc2626'">
                View Full Gallery →
            </a>
        </div>
    </section>
</div>
@endsection
