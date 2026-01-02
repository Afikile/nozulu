@extends('layouts.main')

@section('content')
<div class="hero">
    <h1>About Us</h1>
    <p>Building Excellence Through Passion and Expertise</p>
</div>

<div class="container">
    <section style="margin: 3rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">Who We Are</h2>
        <p style="font-size: 1.1rem; color: #4b5563; line-height: 1.8; margin-bottom: 1rem;">
            Nozulu and Ngonyama Trading Enterprises is a dynamic, passion-driven construction and electrical 
            services company built on a foundation of excellence, integrity, and unwavering commitment to quality. 
            Since our establishment, we have grown from humble beginnings into a trusted name in the construction 
            industry, delivering exceptional results across residential, commercial, and industrial sectors.
        </p>
        <p style="font-size: 1.1rem; color: #4b5563; line-height: 1.8;">
            Our success story is rooted in the vision and determination of our founders, who believed that with 
            passion, dedication, and the right expertise, any challenge can be transformed into an opportunity. 
            Today, we stand as a testament to that belief, having successfully completed numerous projects that 
            have transformed communities and built lasting partnerships with our valued clients.
        </p>
    </section>

    <section style="margin: 3rem 0; background: #f3f4f6; padding: 2rem; border-radius: 8px;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">Our Mission</h2>
        <p style="font-size: 1.1rem; color: #4b5563; line-height: 1.8;">
            To deliver world-class construction and electrical services that exceed client expectations while 
            maintaining the highest standards of safety, professionalism, and quality craftsmanship. We are 
            committed to building not just structures, but lasting relationships founded on trust, reliability, 
            and exceptional service delivery.
        </p>
    </section>

    <section style="margin: 3rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">What Sets Us Apart</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
            <div style="padding: 1.5rem; background: white; border-left: 4px solid #dc2626; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 0.5rem;">Experienced Team</h3>
                <p style="color: #4b5563; line-height: 1.6;">
                    Our team comprises seasoned professionals with extensive experience in construction and electrical works, 
                    ensuring every project is executed with precision and expertise.
                </p>
            </div>
            <div style="padding: 1.5rem; background: white; border-left: 4px solid #1e3a8a; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 0.5rem;">Quality Assurance</h3>
                <p style="color: #4b5563; line-height: 1.6;">
                    We never compromise on quality. From materials selection to final execution, every aspect of our 
                    work undergoes rigorous quality control to ensure excellence.
                </p>
            </div>
            <div style="padding: 1.5rem; background: white; border-left: 4px solid #dc2626; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 0.5rem;">Client-Focused</h3>
                <p style="color: #4b5563; line-height: 1.6;">
                    Your vision drives our work. We listen, collaborate, and deliver solutions that align perfectly 
                    with your needs, timeline, and budget.
                </p>
            </div>
        </div>
    </section>

    <section style="margin: 3rem 0;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">Our Expertise</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
            <div style="background: #1e3a8a; color: white; padding: 1.5rem; border-radius: 8px;">
                <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">⚡ Electrical Works</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>• Electrical installations</li>
                    <li>• Maintenance services</li>
                    <li>• Industrial wiring</li>
                    <li>• Safety inspections</li>
                </ul>
            </div>
            <div style="background: #dc2626; color: white; padding: 1.5rem; border-radius: 8px;">
                <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">🏗️ Construction</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>• Residential buildings</li>
                    <li>• Commercial projects</li>
                    <li>• Industrial facilities</li>
                    <li>• Renovations</li>
                </ul>
            </div>
            <div style="background: #4b5563; color: white; padding: 1.5rem; border-radius: 8px;">
                <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">📋 Project Management</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li>• Full project oversight</li>
                    <li>• Budget management</li>
                    <li>• Timeline coordination</li>
                    <li>• Quality control</li>
                </ul>
            </div>
        </div>
    </section>

    <section style="margin: 3rem 0; text-align: center; background: linear-gradient(135deg, #1e3a8a 0%, #dc2626 100%); color: white; padding: 3rem 2rem; border-radius: 8px;">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;">Our Commitment to You</h2>
        <p style="font-size: 1.1rem; line-height: 1.8; max-width: 800px; margin: 0 auto;">
            At Nozulu and Ngonyama Trading Enterprises, we don't just build structures—we build dreams, 
            transform visions into reality, and create lasting value for our clients. Every project we undertake 
            is a reflection of our passion for excellence and our commitment to delivering results that stand 
            the test of time.
        </p>
    </section>
</div>
@endsection
