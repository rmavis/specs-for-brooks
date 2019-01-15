module Local::Specs::Entries
end


{
  :CV => 'cv.rb',
  :Gallery => 'gallery.rb',
  :Home => 'home.rb',
  :Nav => 'nav.rb',
}.each do |mod,file|
  Local::Specs::Entries.autoload(mod, "#{__dir__}/#{file}")
end
