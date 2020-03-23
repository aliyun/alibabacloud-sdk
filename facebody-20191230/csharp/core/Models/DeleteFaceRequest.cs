// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DeleteFaceRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("FaceId")]
        [Validation(Required=true)]
        public string FaceId { get; set; }

    }

}
