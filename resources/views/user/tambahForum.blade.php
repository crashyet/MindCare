<div role="dialog" id="radix-:r2:" aria-describedby="radix-:r4:" aria-labelledby="radix-:r3:" data-state="open" class="fixed left-[50%] top-[50%] z-50 grid w-full max-w-lg translate-x-[-50%] translate-y-[-50%] gap-4 border bg-background p-6 shadow-lg duration-200 data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[state=closed]:slide-out-to-left-1/2 data-[state=closed]:slide-out-to-top-[48%] data-[state=open]:slide-in-from-left-1/2 data-[state=open]:slide-in-from-top-[48%] sm:rounded-lg sm:max-w-[600px]" tabindex="-1" style="pointer-events: auto;">
  <div class="flex flex-col space-y-1.5 text-center sm:text-left">
    <h2 id="radix-:r3:" class="text-lg font-semibold leading-none tracking-tight">Buat Diskusi Baru</h2>
    <p id="radix-:r4:" class="text-sm text-muted-foreground">Berbagi cerita dan dapatkan dukungan dari komunitas</p>
  </div>
  <form class="space-y-4 mt-4">
    <div class="space-y-2">
      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="title">Judul Diskusi</label>
      <button type="button" role="combobox" aria-controls="radix-:r5:" aria-expanded="false" aria-required="true" aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder="" class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;&gt;span]:line-clamp-1">
        <span style="pointer-events: none;">Pilih kategori</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50" aria-hidden="true">
          <path d="m6 9 6 6 6-6"></path>
        </svg>
      </button>
      <select aria-hidden="true" required="" tabindex="-1" style="position: absolute; border: 0px; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; overflow-wrap: normal;">
        <option value="Kecemasan">Kecemasan</option>
        <option value="Stres">Stres</option>
        <option value="Depresi">Depresi</option>
        <option value="Mindfulness">Mindfulness</option>
        <option value="Self-Care">Self-Care</option>
        <option value="Kesehatan">Kesehatan</option>
      </select>
    </div>
    <div class="space-y-2">
      <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="content">Isi Diskusi</label>
      <textarea class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" id="content" placeholder="Ceritakan yang ingin Anda diskusikan..." rows="6" required=""></textarea>
    
    </div>
    <div class="flex justify-end gap-3">
      <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2" type="button">Batal</button>
      <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 bg-gradient-hero" type="submit">Posting Diskusi</button>
    </div>
  </form>
  <button type="button" class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity data-[state=open]:bg-accent data-[state=open]:text-muted-foreground hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x h-4 w-4">
      <path d="M18 6 6 18"></path>
      <path d="m6 6 12 12"></path>
    </svg>
    <span class="sr-only">Close</span>
  </button>
</div>