module Local::Specs::Fields::Entry

  def self.type
    :Entry
  end

  def self.content_path
    DirMap.content
  end

  def public_path
    "/"
  end

end
