@extends('layouts.main')

@section('content')
<div class="hero">
    <h1>Contact Us</h1>
    <p>Get in touch with us for your next project</p>
</div>

<div class="container">
    <section style="max-width: 600px; margin: 3rem auto;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 2rem; text-align: center;">Send Us a Message</h2>
        
        <form style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #1e3a8a; font-weight: 500;">Name</label>
                <input type="text" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #1e3a8a; font-weight: 500;">Email</label>
                <input type="email" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #1e3a8a; font-weight: 500;">Phone</label>
                <input type="tel" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #1e3a8a; font-weight: 500;">Message</label>
                <textarea rows="5" style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 1rem; resize: vertical;"></textarea>
            </div>

            <button type="submit" style="width: 100%; background-color: #dc2626; color: white; padding: 0.75rem; border: none; border-radius: 4px; font-size: 1rem; font-weight: 600; cursor: pointer;">
                Send Message
            </button>
        </form>
    </section>

    <section style="margin: 3rem 0; text-align: center;">
        <h2 style="font-size: 2rem; color: #1e3a8a; margin-bottom: 1rem;">Contact Information</h2>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
            <p style="font-size: 1.1rem; color: #4b5563; margin-bottom: 1rem;">
                <strong>Phone:</strong> +27 XX XXX XXXX
            </p>
            <p style="font-size: 1.1rem; color: #4b5563; margin-bottom: 1rem;">
                <strong>Email:</strong> info@nozulu-ngonyama.co.za
            </p>
            <p style="font-size: 1.1rem; color: #4b5563;">
                <strong>Address:</strong> Your Address Here
            </p>
        </div>
    </section>
</div>
@endsection
