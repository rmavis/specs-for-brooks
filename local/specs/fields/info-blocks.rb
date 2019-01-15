module Local::Specs::Fields::InfoBlocks

  def self.type
    :Collection
  end

  # InfoBlocks.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :blocks => {
      },
      :copy => {
      },
      :list => {
      },
    }.deep_merge(attrs)

    return {
      :blocks => {:CopyBlocks => _attrs[:blocks]},
      :copy => {:CopyBlock => _attrs[:copy]},
      :list => {:ListBlock => _attrs[:list]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/info-blocks.html.erb"
    else
      "#{DirMap.html_views}/fields/info-blocks.html.erb"
    end
  end

end
