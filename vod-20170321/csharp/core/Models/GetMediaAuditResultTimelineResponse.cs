// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMediaAuditResultTimelineResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaAuditResultTimeline")]
        [Validation(Required=true)]
        public GetMediaAuditResultTimelineResponseMediaAuditResultTimeline MediaAuditResultTimeline { get; set; }
        public class GetMediaAuditResultTimelineResponseMediaAuditResultTimeline : TeaModel {
            [NameInMap("Porn")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn> Porn { get; set; }
            public class GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn : TeaModel {
                    public string Label { get; set; }
                    public string Score { get; set; }
                    public string Timestamp { get; set; }
            }
            [NameInMap("Terrorism")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism> Terrorism { get; set; }
            public class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism : TeaModel {
                    public string Label { get; set; }
                    public string Score { get; set; }
                    public string Timestamp { get; set; }
            }
            [NameInMap("Logo")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo> Logo { get; set; }
            public class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo : TeaModel {
                    public string Label { get; set; }
                    public string Score { get; set; }
                    public string Timestamp { get; set; }
            }
            [NameInMap("Live")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive> Live { get; set; }
            public class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive : TeaModel {
                    public string Label { get; set; }
                    public string Score { get; set; }
                    public string Timestamp { get; set; }
            }
            [NameInMap("Ad")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd> Ad { get; set; }
            public class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd : TeaModel {
                    public string Label { get; set; }
                    public string Score { get; set; }
                    public string Timestamp { get; set; }
            }
        };

    }

}
