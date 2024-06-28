<div>
    @section('title', 'FAQs')
    @include('components.header', [
        'title' => 'Frequently Asked Questions',
        'inactive_path' => 'Home',
        'active_path' => 'FAQ'
        ])

    <x-container class="py-8">
        <div class="grid grid-cols-6 gap-12">
            <div class="col-span-6 lg:col-span-2">
                <div class="flex overflow-auto flex-row gap-2 md:gap-0 lg:flex-col">
                  @if($categories->isNotEmpty())
                  @foreach($categories as $category)
                        

                        <div 
                class="p-2 lg:p-4 lg:py-12 bg-secondary-50 border-b hover:text-white hover:bg-secondary-500 text-dark-400 cursor-pointer"
                wire:click="setActiveCategory({{ $category->id }})"
                @if($activeCategory === $category->id) style="background-color: #70AF2E; color: #fff;" @endif
            >
                <p class="font-bold text-base">{{ $category->name }}</p>
            </div>
                    @endforeach
                    @else
        <p>No categories found.</p>
    @endif
                </div>
            </div>
            <div class="col-span-6 lg:col-span-4 text-dark-400">

                    
              @if($faqs->isNotEmpty())
                        
<div id="accordion-collapse" data-accordion="collapse">

  @foreach($category->faqs as $faq)
    <h2 id="accordion-collapse-heading-{{$faq->id}}">
      <button type="button" 
      class="bg-white flex justify-between items-center w-full p-4 font-semibold text-left transition-all ease-in cursor-pointer border-slate-100 text-secondary-400 open:text-primary rounded-t-1"
     {{-- data-collapse-target="collapse-{{$i}}" --}}
      data-accordion-target="#accordion-collapse-body-{{$faq->id}}" aria-expanded="true" aria-controls="accordion-collapse-body-{{$faq->id}}">
        <span>{{$faq->question}}?</span>
        
        <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
        </svg>
        <svg data-accordion-icon-plus class="w-3 h-3 shrink-0 text-primary hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/>
        </svg>

      </button>
    </h2>
    <div id="accordion-collapse-body-{{$faq->id}}" class="hidden" aria-labelledby="accordion-collapse-heading-{{$faq->id}}">
      <div class="p-5">
        <p class="mb-2 text-gray-500 dark:text-gray-400">
          {{$faq->answer}}
        </p>
      </div>
        
    </div>
    @endforeach
    
  </div>
  @else
        <p>No FAQs found.</p>
    @endif
  

            </div>
        </div>
    </x-container>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const accordionButtons = document.querySelectorAll('button[data-accordion-target]');
    
    accordionButtons.forEach(button => {
      button.addEventListener('click', () => {
        const target = document.querySelector(button.dataset.accordionTarget);
        const isExpanded = button.getAttribute('aria-expanded') === 'true';
        
        // Close all accordion items
        accordionButtons.forEach(btn => {
          const btnTarget = document.querySelector(btn.dataset.accordionTarget);
          btn.setAttribute('aria-expanded', 'false');
          btn.querySelector('span').classList.remove('text-primary');
          btn.querySelector('svg[data-accordion-icon]').classList.remove('hidden');
          btn.querySelector('svg[data-accordion-icon-plus]').classList.add('hidden');
          btnTarget.classList.add('hidden');
        });

        // If the clicked item was closed, open it
        if (!isExpanded) {
          button.setAttribute('aria-expanded', 'true');
          target.classList.remove('hidden');
          button.querySelector('span').classList.add('text-primary');
          button.querySelector('svg[data-accordion-icon]').classList.add('hidden');
          button.querySelector('svg[data-accordion-icon-plus]').classList.remove('hidden');
        }
      });
    });

    // Ensure the first accordion is open by default
    const firstButton = accordionButtons[0];
    const firstTarget = document.querySelector(firstButton.dataset.accordionTarget);
    firstButton.setAttribute('aria-expanded', 'true');
    firstButton.querySelector('span').classList.add('text-primary');
    firstButton.querySelector('svg[data-accordion-icon]').classList.add('hidden');
    firstButton.querySelector('svg[data-accordion-icon-plus]').classList.remove('hidden');
    firstTarget.classList.remove('hidden');
  });
</script>
