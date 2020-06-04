// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListMediaDNADeleteJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AIJobList")]
        [Validation(Required=true)]
        public ListMediaDNADeleteJobResponseAIJobList AIJobList { get; set; }
        public class ListMediaDNADeleteJobResponseAIJobList : TeaModel {
            [NameInMap("AIJob")]
            [Validation(Required=true)]
            public List<ListMediaDNADeleteJobResponseAIJobListAIJob> AIJob { get; set; }
            public class ListMediaDNADeleteJobResponseAIJobListAIJob : TeaModel {
                    public string JobId { get; set; }
                    public string MediaId { get; set; }
                    public string Status { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
                    public string FpDBId { get; set; }
            }
        };

        [NameInMap("NonExistAIJobIds")]
        [Validation(Required=true)]
        public ListMediaDNADeleteJobResponseNonExistAIJobIds NonExistAIJobIds { get; set; }
        public class ListMediaDNADeleteJobResponseNonExistAIJobIds : TeaModel {
            [NameInMap("String")]
            [Validation(Required=true)]
            public List<string> String { get; set; }
        };

    }

}
