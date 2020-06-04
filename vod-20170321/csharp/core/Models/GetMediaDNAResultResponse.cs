// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMediaDNAResultResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DNAResult")]
        [Validation(Required=true)]
        public GetMediaDNAResultResponseDNAResult DNAResult { get; set; }
        public class GetMediaDNAResultResponseDNAResult : TeaModel {
            [NameInMap("VideoDNA")]
            [Validation(Required=true)]
            public List<GetMediaDNAResultResponseDNAResultVideoDNA> VideoDNA { get; set; }
            public class GetMediaDNAResultResponseDNAResultVideoDNA : TeaModel {
                    public string PrimaryKey { get; set; }
                    public string Similarity { get; set; }
                    public List<GetMediaDNAResultResponseDNAResultVideoDNADetail> Detail { get; set; }
                    public class GetMediaDNAResultResponseDNAResultVideoDNADetail : TeaModel {
                        [NameInMap("Start")]
                        [Validation(Required=true)]
                        public string Start { get; set; }

                        [NameInMap("Duration")]
                        [Validation(Required=true)]
                        public string Duration { get; set; }

                    }
            }
        };

    }

}
