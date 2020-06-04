// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SubmitAIJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AIJobList")]
        [Validation(Required=true)]
        public SubmitAIJobResponseAIJobList AIJobList { get; set; }
        public class SubmitAIJobResponseAIJobList : TeaModel {
            [NameInMap("AIJob")]
            [Validation(Required=true)]
            public List<SubmitAIJobResponseAIJobListAIJob> AIJob { get; set; }
            public class SubmitAIJobResponseAIJobListAIJob : TeaModel {
                    public string JobId { get; set; }
                    public string Type { get; set; }
                    public string MediaId { get; set; }
                    public string Status { get; set; }
                    public string Code { get; set; }
                    public string Message { get; set; }
                    public string CreationTime { get; set; }
                    public string Data { get; set; }
            }
        };

    }

}
