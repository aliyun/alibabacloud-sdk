// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetVideoListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("VideoList")]
        [Validation(Required=true)]
        public GetVideoListResponseVideoList VideoList { get; set; }
        public class GetVideoListResponseVideoList : TeaModel {
            [NameInMap("Video")]
            [Validation(Required=true)]
            public List<GetVideoListResponseVideoListVideo> Video { get; set; }
            public class GetVideoListResponseVideoListVideo : TeaModel {
                    public string VideoId { get; set; }
                    public string Title { get; set; }
                    public string Tags { get; set; }
                    public string Status { get; set; }
                    public long Size { get; set; }
                    public float? Duration { get; set; }
                    public string Description { get; set; }
                    public string CreateTime { get; set; }
                    public string ModifyTime { get; set; }
                    public string ModificationTime { get; set; }
                    public string CreationTime { get; set; }
                    public string CoverURL { get; set; }
                    public long CateId { get; set; }
                    public string CateName { get; set; }
                    public string StorageLocation { get; set; }
                    public string AppId { get; set; }
                    public GetVideoListResponseVideoListVideoSnapshots Snapshots { get; set; }
                    public class GetVideoListResponseVideoListVideoSnapshots : TeaModel {
                        [NameInMap("Snapshot")]
                        [Validation(Required=true)]
                        public List<string> Snapshot { get; set; }

                    }
            }
        };

    }

}
