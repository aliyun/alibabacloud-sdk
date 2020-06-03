// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ft20180713.Models
{
    public class BatchAuditTest01Response : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Demo01")]
        [Validation(Required=true)]
        public BatchAuditTest01ResponseDemo01 Demo01 { get; set; }
        public class BatchAuditTest01ResponseDemo01 : TeaModel {
            [NameInMap("Demo011")]
            [Validation(Required=true)]
            public BatchAuditTest01ResponseDemo01Demo011 Demo011 { get; set; }
            public class BatchAuditTest01ResponseDemo01Demo011 : TeaModel {
                [NameInMap("Demo011")]
                [Validation(Required=true)]
                public List<BatchAuditTest01ResponseDemo01Demo011Demo011> Demo011 { get; set; }
                public class BatchAuditTest01ResponseDemo01Demo011Demo011 : TeaModel {
                    [NameInMap("Demo0111")]
                    [Validation(Required=true)]
                    public string Demo0111 { get; set; }

                }

            }
        };

    }

}
