module Local::Specs::Fields
end


{
  :Bool => 'bool.rb',
  :CopyBlock => 'copy-block.rb',
  :CopyBlocks => 'copy-blocks.rb',
  :Entry => 'entry.rb',
  :GalleryBlocks => 'gallery-blocks.rb',
  :ImageAndText => 'image-and-text.rb',
  :Image => 'image.rb',
  :InfoBlocks => 'info-blocks.rb',
  :Link => 'link.rb',
  :List => 'list.rb',
  :ListBlock => 'list-block.rb',
  :Meta => 'meta.rb',
  :NavItems => 'nav-items.rb',
  :PlainText => 'plain-text.rb',
}.each do |mod,file|
  Local::Specs::Fields.autoload(mod, "#{__dir__}/#{file}")
end
