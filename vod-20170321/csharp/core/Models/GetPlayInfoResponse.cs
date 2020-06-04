// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetPlayInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PlayInfoList")]
        [Validation(Required=true)]
        public GetPlayInfoResponsePlayInfoList PlayInfoList { get; set; }
        public class GetPlayInfoResponsePlayInfoList : TeaModel {
            [NameInMap("PlayInfo")]
            [Validation(Required=true)]
            public List<GetPlayInfoResponsePlayInfoListPlayInfo> PlayInfo { get; set; }
            public class GetPlayInfoResponsePlayInfoListPlayInfo : TeaModel {
                    public long Width { get; set; }
                    public long Height { get; set; }
                    public long Size { get; set; }
                    public string PlayURL { get; set; }
                    public string Bitrate { get; set; }
                    public string Definition { get; set; }
                    public string Duration { get; set; }
                    public string Format { get; set; }
                    public string Fps { get; set; }
                    public long Encrypt { get; set; }
                    public string Plaintext { get; set; }
                    public string Complexity { get; set; }
                    public string StreamType { get; set; }
                    public string Rand { get; set; }
                    public string JobId { get; set; }
                    public string PreprocessStatus { get; set; }
                    public string WatermarkId { get; set; }
                    public string Status { get; set; }
                    public string CreationTime { get; set; }
                    public string ModificationTime { get; set; }
                    public string EncryptType { get; set; }
                    public string NarrowBandType { get; set; }
                    public string Specification { get; set; }
            }
        };

        [NameInMap("VideoBase")]
        [Validation(Required=true)]
        public GetPlayInfoResponseVideoBase VideoBase { get; set; }
        public class GetPlayInfoResponseVideoBase : TeaModel {
            [NameInMap("OutputType")]
            [Validation(Required=true)]
            public string OutputType { get; set; }
            [NameInMap("CoverURL")]
            [Validation(Required=true)]
            public string CoverURL { get; set; }
            [NameInMap("Duration")]
            [Validation(Required=true)]
            public string Duration { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }
            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }
            [NameInMap("MediaType")]
            [Validation(Required=true)]
            public string MediaType { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("TranscodeMode")]
            [Validation(Required=true)]
            public string TranscodeMode { get; set; }
            [NameInMap("ThumbnailList")]
            [Validation(Required=true)]
            public GetPlayInfoResponseVideoBaseThumbnailList ThumbnailList { get; set; }
            public class GetPlayInfoResponseVideoBaseThumbnailList : TeaModel {
                [NameInMap("Thumbnail")]
                [Validation(Required=true)]
                public List<GetPlayInfoResponseVideoBaseThumbnailListThumbnail> Thumbnail { get; set; }
                public class GetPlayInfoResponseVideoBaseThumbnailListThumbnail : TeaModel {
                    [NameInMap("URL")]
                    [Validation(Required=true)]
                    public string URL { get; set; }

                }

            }
        };

    }

}
