module Local::Specs::Fields::CopyBlocks

  def self.type
    :Compound
  end

  # CopyBlocks.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :header => {
        :required => nil,
      },
      :blocks => {
        :required => true,
      },
    }.deep_merge(attrs)

    return {
      :header => {:PlainText => _attrs[:header]},
      :blocks => {:InfoBlocks => _attrs[:blocks]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/copy-blocks.html.erb"
    else
      "#{DirMap.html_views}/fields/copy-blocks.html.erb"
    end
  end

end
