
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home View</title>
 
 <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
</head>
<body class="bg-white">

          <div class="container mx-auto ">
   <div class="w-full min-h-[500px] bg-cover bg-center" style="background-image: url('images/banner1.jpg')">
</div>
  </div>

  <section class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid md:grid-cols-2 gap-16">
      <!-- Left: Contact Info -->
      <div class="space-y-8">
        <div>
            <h3 class="text-2xl font-bold  text-red-600 mb-10 uppercase tracking-wider">Contact Information</h2>
          <p class="text-gray-600 text-lg">We’re here to answer any questions you may have about our company or products.</p>
        </div>

        <div class="text-gray-700 space-y-4 text-base">
          <div>
            <strong>📍 Address:</strong><br>
            Asar Engineering Pvt. Ltd., GIDC Navsari, Gujarat 396445
          </div>
          <div>
            <strong>📞 Phone:</strong><br>
            +91 98765 43210
          </div>
          <div>
            <strong>📧 Email:</strong><br>
            contact@asargears.com
          </div>
          <!-- <div>
            <strong>🕘 Working Hours:</strong><br>
            Mon – Sat: 9:00 AM – 6:00 PM<br>
            Sunday: Closed
          </div> -->
        </div>
      </div>

      <!-- Right: Contact Form -->
      
         <form  class="space-y-6" action="<?= base_url('Submitform') ?>" method="post" novalidate>
            <h3 class="text-2xl font-bold  text-red-600 mb-10 uppercase tracking-wider">We Want To Here You !</h2>
        
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
          <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-500 focus:outline-none">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-500 focus:outline-none">
        </div>

        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
          <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-500 focus:outline-none">
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
          <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-red-500 focus:outline-none"></textarea>
        </div>

 <button class="border-2 px-4 py-2 font-semibold  mt-2" style="border-color: #ca2212; color: #ca2212; background-color: #ffffff;">
Submit
</button>     
 </form>
    </div>
  </section>
  <!-- Map Section -->
 <!-- <div class="max-w-7xl mx-auto px-4 ">  -->
  

  <div class="w-full h-[400px] rounded overflow-hidden shadow-md ">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.517347757599!2d72.92177901493427!3d21.13131098593702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0eeca8144e1c5%3A0xd8cbb1dc9c11ad15!2sNavsari%2C%20Gujarat%20396445!5e0!3m2!1sen!2sin!4v1717998596805!5m2!1sen!2sin"
      width="100%"
      height="100%"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      class="border-0 w-full h-full"
    ></iframe>
  </div> 
</body>
</html>

