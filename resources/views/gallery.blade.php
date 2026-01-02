@extends('layouts.main')

@section('content')
<div class="hero">
    <h1>Our Projects</h1>
    <p>
        @if($category == 'electrical')
            Electrical Works
        @elseif($category == 'construction')
            Construction Works
        @else
            All Projects
        @endif
    </p>
</div>

<div class="container">
    @if($projects->isEmpty())
        <div style="text-align: center; padding: 3rem;">
            <p style="font-size: 1.2rem; color: #4b5563;">No projects available at the moment.</p>
        </div>
    @else
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
            @foreach($projects as $project)
                <div style="background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); overflow: hidden;">
                    <!-- Main Display Image -->
                    <div style="position: relative; height: 250px; overflow: hidden; cursor: pointer;" onclick="openProjectModal({{ $project->id }})">
                        @if($project->image1)
                            <img src="{{ asset('storage/' . $project->image1) }}" alt="{{ $project->name }}" style="width: 100%; height: 250px; object-fit: cover; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            <div style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px 10px; border-radius: 4px; font-size: 0.85rem;">
                                Click to view details
                            </div>
                        @else
                            <div style="width: 100%; height: 250px; background: #e5e7eb; display: flex; align-items: center; justify-content: center; color: #9ca3af;">
                                No image available
                            </div>
                        @endif
                    </div>

                    <!-- Project Details -->
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.5rem; color: #1e3a8a; margin-bottom: 1rem; font-weight: 700;">{{ $project->name }}</h3>
                        
                        <div style="margin-bottom: 0.5rem;">
                            <span style="font-weight: 600; color: #374151;">Category:</span>
                            <span style="color: #dc2626; text-transform: capitalize; font-weight: 600;">{{ $project->category }}</span>
                        </div>
                        
                        <div style="margin-bottom: 0.5rem;">
                            <span style="font-weight: 600; color: #374151;">Duration:</span>
                            <span style="color: #4b5563;">{{ $project->duration }}</span>
                        </div>
                        
                        <div style="margin-bottom: 0.5rem;">
                            <span style="font-weight: 600; color: #374151;">Client:</span>
                            <span style="color: #4b5563;">{{ $project->client }}</span>
                        </div>
                        
                        <div style="margin-bottom: 0.5rem;">
                            <span style="font-weight: 600; color: #374151;">Consultant:</span>
                            <span style="color: #4b5563;">{{ $project->consultant }}</span>
                        </div>
                        
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #e5e7eb;">
                            <span style="font-weight: 600; color: #374151;">Cost:</span>
                            <span style="color: #dc2626; font-size: 1.2rem; font-weight: 700;">R {{ number_format($project->cost, 2) }}</span>
                        </div>

                        <button onclick="openProjectModal({{ $project->id }})" style="margin-top: 1rem; width: 100%; background-color: #1e3a8a; color: white; padding: 0.75rem; border: none; border-radius: 4px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#2563eb'" onmouseout="this.style.backgroundColor='#1e3a8a'">
                            View All Images
                        </button>
                    </div>

                    <!-- Hidden data for modal -->
                    <div id="project-data-{{ $project->id }}" style="display: none;">
                        <div data-image1="{{ $project->image1 ? asset('storage/' . $project->image1) : '' }}"></div>
                        <div data-image2="{{ $project->image2 ? asset('storage/' . $project->image2) : '' }}"></div>
                        <div data-image3="{{ $project->image3 ? asset('storage/' . $project->image3) : '' }}"></div>
                        <div data-image4="{{ $project->image4 ? asset('storage/' . $project->image4) : '' }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<!-- Project Modal -->
<div id="projectModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999; overflow-y: auto;" onclick="closeProjectModal()">
    <div style="max-width: 900px; margin: 2rem auto; background: white; border-radius: 8px; position: relative;" onclick="event.stopPropagation()">
        <button onclick="closeProjectModal()" style="position: absolute; top: 15px; right: 15px; background: #dc2626; color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.5rem; cursor: pointer; z-index: 10; display: flex; align-items: center; justify-content: center; font-weight: bold;">
            ×
        </button>
        
        <!-- Image Carousel in Modal -->
        <div style="position: relative; background: #000;">
            <div id="modalCarousel" style="position: relative; height: 500px; overflow: hidden;">
                <div id="modalImageContainer" style="display: flex; transition: transform 0.5s ease; height: 100%;">
                    <!-- Images will be inserted here by JavaScript -->
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <button id="modalPrevBtn" onclick="modalPrevImage()" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.8); color: #1e3a8a; border: none; width: 50px; height: 50px; border-radius: 50%; font-size: 2rem; cursor: pointer; font-weight: bold; display: flex; align-items: center; justify-content: center;">
                ‹
            </button>
            <button id="modalNextBtn" onclick="modalNextImage()" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.8); color: #1e3a8a; border: none; width: 50px; height: 50px; border-radius: 50%; font-size: 2rem; cursor: pointer; font-weight: bold; display: flex; align-items: center; justify-content: center;">
                ›
            </button>

            <!-- Image Counter -->
            <div id="imageCounter" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); background: rgba(0,0,0,0.7); color: white; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                1 / 4
            </div>
        </div>

        <!-- Thumbnail Navigation -->
        <div id="thumbnailContainer" style="display: flex; gap: 10px; padding: 20px; background: #f3f4f6; justify-content: center; flex-wrap: wrap;">
            <!-- Thumbnails will be inserted here by JavaScript -->
        </div>
    </div>
</div>

<script>
    let currentModalIndex = 0;
    let modalImages = [];

    function openProjectModal(projectId) {
        const projectData = document.getElementById(`project-data-${projectId}`);
        const images = [];
        
        for (let i = 1; i <= 4; i++) {
            const imgData = projectData.querySelector(`[data-image${i}]`);
            if (imgData) {
                const imgSrc = imgData.getAttribute(`data-image${i}`);
                if (imgSrc) images.push(imgSrc);
            }
        }
        
        if (images.length === 0) return;
        
        modalImages = images;
        currentModalIndex = 0;
        
        renderModalImages();
        document.getElementById('projectModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeProjectModal() {
        document.getElementById('projectModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    function renderModalImages() {
        const container = document.getElementById('modalImageContainer');
        const thumbnailContainer = document.getElementById('thumbnailContainer');
        
        container.innerHTML = '';
        thumbnailContainer.innerHTML = '';
        
        modalImages.forEach((imgSrc, index) => {
            // Main images
            const img = document.createElement('img');
            img.src = imgSrc;
            img.style.width = '100%';
            img.style.height = '500px';
            img.style.objectFit = 'contain';
            img.style.flexShrink = '0';
            container.appendChild(img);
            
            // Thumbnails
            const thumb = document.createElement('div');
            thumb.style.width = '100px';
            thumb.style.height = '80px';
            thumb.style.backgroundImage = `url(${imgSrc})`;
            thumb.style.backgroundSize = 'cover';
            thumb.style.backgroundPosition = 'center';
            thumb.style.cursor = 'pointer';
            thumb.style.border = index === 0 ? '3px solid #1e3a8a' : '3px solid transparent';
            thumb.style.borderRadius = '4px';
            thumb.style.transition = 'all 0.3s';
            thumb.onclick = () => goToModalImage(index);
            thumbnailContainer.appendChild(thumb);
        });
        
        updateModalView();
    }

    function updateModalView() {
        const container = document.getElementById('modalImageContainer');
        container.style.transform = `translateX(-${currentModalIndex * 100}%)`;
        
        document.getElementById('imageCounter').textContent = `${currentModalIndex + 1} / ${modalImages.length}`;
        
        // Update thumbnail borders
        const thumbnails = document.getElementById('thumbnailContainer').children;
        Array.from(thumbnails).forEach((thumb, index) => {
            thumb.style.border = index === currentModalIndex ? '3px solid #1e3a8a' : '3px solid transparent';
        });
    }

    function modalNextImage() {
        currentModalIndex = (currentModalIndex + 1) % modalImages.length;
        updateModalView();
    }

    function modalPrevImage() {
        currentModalIndex = (currentModalIndex - 1 + modalImages.length) % modalImages.length;
        updateModalView();
    }

    function goToModalImage(index) {
        currentModalIndex = index;
        updateModalView();
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('projectModal');
        if (modal.style.display === 'block') {
            if (e.key === 'ArrowLeft') modalPrevImage();
            if (e.key === 'ArrowRight') modalNextImage();
            if (e.key === 'Escape') closeProjectModal();
        }
    });
</script>
@endsection
