// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectLivingFaceRequest : TeaModel {
        [NameInMap("Tasks")]
        [Validation(Required=true)]
        public List<DetectLivingFaceRequestTasks> Tasks { get; set; }
        public class DetectLivingFaceRequestTasks : TeaModel {
            [NameInMap("ImageURL")]
            [Validation(Required=true)]
            public string ImageURL { get; set; }

        }

    }

}
