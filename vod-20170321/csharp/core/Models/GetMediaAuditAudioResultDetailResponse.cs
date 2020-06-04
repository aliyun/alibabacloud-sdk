// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMediaAuditAudioResultDetailResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaAuditAudioResultDetail")]
        [Validation(Required=true)]
        public GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail MediaAuditAudioResultDetail { get; set; }
        public class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail : TeaModel {
            [NameInMap("Total")]
            [Validation(Required=true)]
            public int? Total { get; set; }
            [NameInMap("PageTotal")]
            [Validation(Required=true)]
            public int? PageTotal { get; set; }
            [NameInMap("List")]
            [Validation(Required=true)]
            public List<GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList> List { get; set; }
            public class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList : TeaModel {
                    public long StartTime { get; set; }
                    public long EndTime { get; set; }
                    public string Text { get; set; }
                    public string Label { get; set; }
            }
        };

    }

}
