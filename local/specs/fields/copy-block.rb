module Local::Specs::Fields::CopyBlock

  def self.type
    :Compound
  end

  # CopyBlock.fields :: hash -> hash
  def self.fields(attrs = { })
    _attrs = {
      :header => {
        :required => nil,
      },
      :copy => {
        :required => true,
      },
    }.deep_merge(attrs)

    return {
      :header => {:PlainText => _attrs[:header]},
      :copy => {:PlainText => _attrs[:copy]},
    }
  end

  # view_file :: symbol -> string
  def view_file(type)
    if (type == :html)
      "#{DirMap.html_views}/fields/copy-block.html.erb"
    else
      "#{DirMap.html_views}/fields/copy-block.html.erb"
    end
  end

end
