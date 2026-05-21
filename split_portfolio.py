import re
import os

with open('resources/views/welcome.blade.php', 'r') as f:
    content = f.read()

# Layout parts
header_end = content.find('<!-- Main Content -->') + len('<!-- Main Content -->\n        <main class="flex-grow">')
footer_start = content.find('<!-- Footer -->')

header = content[:header_end]
footer = content[footer_start:]

# Change links in header
header = header.replace('href="#about"', 'href="{{ route(\'about\') }}" class="{{ request()->routeIs(\'about\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"')
header = header.replace('href="#experience"', 'href="{{ route(\'experience\') }}" class="{{ request()->routeIs(\'experience\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"')
header = header.replace('href="#skills"', 'href="{{ route(\'skills\') }}" class="{{ request()->routeIs(\'skills\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"')
header = header.replace('href="#projects"', 'href="{{ route(\'projects\') }}" class="{{ request()->routeIs(\'projects\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"')
header = header.replace('href="#contact"', 'href="{{ route(\'contact\') }}" class="px-4 py-2 rounded-full bg-brand-500/10 text-brand-400 border border-brand-500/20 hover:bg-brand-500/20 transition-all text-sm font-medium ml-4"')
header = header.replace('href="#" class="text-xl font-bold tracking-tighter text-white"', 'href="{{ route(\'home\') }}" class="text-xl font-bold tracking-tighter text-white"')

# Remove the old class list for the active links because we completely replaced it in the replace above
header = re.sub(r'href="\{\{ route\(\'about\'\) \}\}" class=".*?" class=".*?"', r'href="{{ route(\'about\') }}" class="{{ request()->routeIs(\'about\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"', header)
header = re.sub(r'href="\{\{ route\(\'experience\'\) \}\}" class=".*?" class=".*?"', r'href="{{ route(\'experience\') }}" class="{{ request()->routeIs(\'experience\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"', header)
header = re.sub(r'href="\{\{ route\(\'skills\'\) \}\}" class=".*?" class=".*?"', r'href="{{ route(\'skills\') }}" class="{{ request()->routeIs(\'skills\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"', header)
header = re.sub(r'href="\{\{ route\(\'projects\'\) \}\}" class=".*?" class=".*?"', r'href="{{ route(\'projects\') }}" class="{{ request()->routeIs(\'projects\') ? \'text-white bg-slate-800/50\' : \'text-slate-300 hover:text-white\' }} transition-colors px-3 py-2 rounded-md text-sm font-medium"', header)
header = re.sub(r'href="\{\{ route\(\'contact\'\) \}\}" class=".*?" class=".*?"', r'href="{{ route(\'contact\') }}" class="px-4 py-2 rounded-full bg-brand-500/10 text-brand-400 border border-brand-500/20 hover:bg-brand-500/20 transition-all text-sm font-medium ml-4"', header)

# Remove the class="text-slate..." from the replacement if it duplicated
header = re.sub(r'class="text-slate-300 hover:text-white transition-colors px-3 py-2 rounded-md text-sm font-medium" >', '>', header)


layout_content = header + '\n            @yield(\'content\')\n        </main>\n\n        ' + footer

os.makedirs('resources/views/layouts', exist_ok=True)
with open('resources/views/layouts/app.blade.php', 'w') as f:
    f.write(layout_content)


# Extract sections
def extract_section(start_marker, end_marker):
    start = content.find(start_marker)
    if end_marker:
        end = content.find(end_marker)
        return content[start:end].strip()
    else:
        return content[start:footer_start].strip()

home_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- Hero Section -->', '<!-- About Section -->') + "\n@endsection"
about_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- About Section -->', '<!-- Experience Section -->').replace('py-24', 'pt-32 pb-24 min-h-screen') + "\n@endsection"
experience_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- Experience Section -->', '<!-- Skills Section -->').replace('py-24', 'pt-32 pb-24 min-h-screen') + "\n@endsection"
skills_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- Skills Section -->', '<!-- Projects Section -->').replace('py-24', 'pt-32 pb-24 min-h-screen') + "\n@endsection"
projects_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- Projects Section -->', '<!-- Contact Section -->').replace('py-24', 'pt-32 pb-24 min-h-screen') + "\n@endsection"
contact_content = "@extends('layouts.app')\n\n@section('content')\n" + extract_section('<!-- Contact Section -->', None).replace('py-24', 'pt-32 pb-24 min-h-screen') + "\n@endsection"

# Replace href="#something" with href="{{ route('something') }}" in Home content for buttons
home_content = home_content.replace('href="#projects"', 'href="{{ route(\'projects\') }}"')
home_content = home_content.replace('href="#contact"', 'href="{{ route(\'contact\') }}"')


with open('resources/views/home.blade.php', 'w') as f: f.write(home_content)
with open('resources/views/about.blade.php', 'w') as f: f.write(about_content)
with open('resources/views/experience.blade.php', 'w') as f: f.write(experience_content)
with open('resources/views/skills.blade.php', 'w') as f: f.write(skills_content)
with open('resources/views/projects.blade.php', 'w') as f: f.write(projects_content)
with open('resources/views/contact.blade.php', 'w') as f: f.write(contact_content)

print("Files created successfully.")
